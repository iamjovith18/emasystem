<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usercred;
use App\Accessory;

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
    public function index()
    {

        $total_users = Usercred::count();
        $total_headsets = Accessory::where('category_id','=',3)->count();
        

        return view('home')->with('total_users',$total_users)
                           ->with('total_headsets',$total_headsets);
    }
}
