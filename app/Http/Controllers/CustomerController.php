<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function register_submit(Request $request)
    {
//        dd($request->all());
        $customer = new Customer();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:8',
            'phone'=>'required',
            'user_type'=>'required',
            'image'=>'nullable'
        ]);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->user_type = $request->user_type;
        $customer->password = Hash::make($request->password);

        if($request->image){
            $fileUploadService = new FileService();
            $customer->image =  $fileUploadService->uploadFile($request->image, 'customers');
        }

        $customer->save();

        Auth::guard('customer')->login($customer);

        return redirect()->route('personal')->with('message','Uğurla qeydiyyatdan keçdiniz');

    }

    public function login_submit(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|string|min:8',
        ]);

        if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('personal')->with('message','Daxil oldunuz');
        }else{
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'password' => ['Şifrə yanlışdır'],
            ]);
            throw $error;
        }

    }

    public function logout()
    {

        Auth::guard('customer')->logout();

        return redirect()->route('main_login');

    }

    public function profile_update(Request $request)
    {
        $customer = Customer::where('id', Auth::guard('customer')->user()->id)->first();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone'=>'required',
            'user_type'=>'required',
            'image'=>'nullable',
            'password'=>'nullable'
        ]);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->user_type = $request->user_type;

        if($request->password){
            $customer->password = Hash::make($request->password);
        }

        if ($request->image) {
            $fileUploadService = new FileService();
            $customer->image =  $fileUploadService->uploadFile($request->image, 'customers');
        }

        $customer->save();

        return redirect()->back()->with('message','Məlumatlarınız yeniləndi');

    }
}
