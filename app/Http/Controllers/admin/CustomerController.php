<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:list-customers|create-customers|edit-customers|delete-customers', ['only' => ['index','show']]);
        $this->middleware('permission:create-customers', ['only' => ['create','store']]);
        $this->middleware('permission:edit-customers', ['only' => ['edit']]);
        $this->middleware('permission:delete-customers', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store()
    {

    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit()
    {


        return view('admin.customers.edit');

    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Customer $customer)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'password' => 'nullable|string|min:8',
        ]);

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');

        if ($request->password) {
            $customer->password = Hash::make($request->password);
        }


        $customer->save();

        return redirect()->back()->with('message','İstifadəçi update edildi');

    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Customer $customer)
    {

        $customer->delete();
        return redirect()->route('customers.index')->with('message','İstifadəçi silindi');
    }
}
