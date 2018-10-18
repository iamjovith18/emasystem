<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usercred;
use App\Accessory;
use App\Component;

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
        

        /* total headset */
        $total_quantity = Accessory::where('category_id','=',3)->count('quantity');
        $total_order_qty = Accessory::where('category_id','=',3)->where('order_qty','!=',0)->count('order_qty');
        $total_headsets = $total_quantity - $total_order_qty;
        /* end total headset */
        
        
        
        $total_hdd = Component::where('category_id','=',5)->count();

        return view('home')->with('total_users',$total_users)
                           ->with('total_headsets',$total_headsets)
                           ->with('total_hdd',$total_hdd)
                           ->with('total_order_qty',$total_order_qty);
    }
}
