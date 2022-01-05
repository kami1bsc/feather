<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreNavigationController extends Controller
{
    public function dashboard()
    {
        return view('store.dashboard');
    }
}
