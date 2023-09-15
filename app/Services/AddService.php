<?php

namespace App\Services;

use App\Models\Add;
use Illuminate\Support\Facades\Auth;

class AddService {

    public function pending($status)
    {

        $adds = Add::where([['status', $status], ['customer_id', Auth::guard('customer')->user()->id]])->get();
        return $adds;

    }

}
