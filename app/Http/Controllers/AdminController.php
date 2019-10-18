<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('admin');
    }

    public function index(Request $request)
    {
        return redirect()->route('admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        return view('admin.welcome');
    }
}
