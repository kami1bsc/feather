<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerSupportController extends Controller
{
    public function contact()
    {
        return view('store.seller_support.contact');
    }

    public function help()
    {
        return view('store.seller_support.help');
    }
}
