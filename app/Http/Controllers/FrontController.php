<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function main_page()
    {
        return view('front.home');
    }

    public function register()
    {
        return view('front.register');
    }

    public function login()
    {
        return view('front.login');
    }

    public function isaxtaran()
    {
        return view('front.isaxtaran');
    }

    public function isciaxtaran()
    {
        return view('front.isciaxtaran');
    }

    public function mehsulsatan()
    {
        return view('front.mehsulsatan');
    }

    public function mehsulaxtaran()
    {
        return view('front.mehsulaxtaran');
    }

    public function test()
    {
        return view('front.test');
    }

}
