<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function index(){
        return view('Seller.dashboard');
    }
}
