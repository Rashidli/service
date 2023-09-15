<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Services\AddService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function personal()
    {

        $customer = Customer::where('id',Auth::guard('customer')->user()->id)->first();
        return view('front.personal', compact('customer'));

    }

    public function pending()
    {

        $get_pending = new AddService();
        $adds = $get_pending->pending('pending');

        return view('front.pending',compact('adds'));

    }

    public function expired()
    {
        return view('front.expired');
    }

    public function adds()
    {
        return view('front.adds');
    }
}
