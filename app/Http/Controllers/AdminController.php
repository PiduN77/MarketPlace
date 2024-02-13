<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tables = DB::select('SHOW TABLES');
        return view('Admin/dashboard', compact('tables'));
    }
}
