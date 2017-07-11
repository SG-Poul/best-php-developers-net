<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) return redirect('/');
        return view('auth.login');
    }

    public function destroy ()
    {
        auth()->logout();
        return redirect()->home();
    }

    public function gallery()
    {
        if (Auth::check()) return view('admin.gallery');
    }
}
