<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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

    public function quotes ()
    {
        if (Auth::check()) return view('admin.quotes', ['quotes' => Quote::all()]);
    }

    public function deleteQuote ()
    {
        if (Auth::check()) {
            Quote::destroy(Input::get('id'));
            return 200;
        }
    }
}
