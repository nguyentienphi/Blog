<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkAdmin');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
