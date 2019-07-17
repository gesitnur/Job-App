<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(Request $request) {
        {
            if($request->user()->hasRole('user')){
                return redirect()->route("user-home");
            
            }else if($request->user()->hasRole("admin")){
                    return redirect()->route("admin-home");
            }
        }
}
}
