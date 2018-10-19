<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usercred;
use App\Accessory;
use App\Component;
use App\System_Unit;

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
        $total_qty = Accessory::where('category_id','=',3)->sum('quantity');
        $total_o_qty = Accessory::where('category_id','=',3)->sum('order_qty');
        $total_headsets = $total_qty - $total_o_qty;
        /* end total headset */
        
        
        
        /* total keyboard */
        $total_qty = Accessory::where('category_id','=',4)->sum('quantity');
        $total_o_qty = Accessory::where('category_id','=',4)->sum('order_qty');
        $total_kb = $total_qty - $total_o_qty;
        /* end total keyboard */

        /* total mouse */
        $total_qty = Accessory::where('category_id','=',2)->sum('quantity');
        $total_o_qty = Accessory::where('category_id','=',2)->sum('order_qty');
        $total_m = $total_qty - $total_o_qty;
        /* end total mouse */

        /* total hdd */
        $total_qty = component::where('category_id','=',5)->sum('total');
        $total_o_qty = component::where('category_id','=',5)->sum('order_qty');
        $total_hdd = $total_qty - $total_o_qty;
        /* end total hdd */

        /* total monitor */
        $total_qty = system_unit::where('category_id','=',8)->sum('total');
        $total_o_qty = system_unit::where('category_id','=',8)->sum('order_qty');
        $total_monitor = $total_qty - $total_o_qty;
        /* end total monitor */
        
        /* total cpu */
        $total_qty = system_unit::where('category_id','=',11)->sum('total');
        $total_o_qty = system_unit::where('category_id','=',11)->sum('order_qty');
        $total_cpu = $total_qty - $total_o_qty;
        /* end total cpu */



        return view('home')->with('total_users',$total_users)
                           ->with('total_headsets',$total_headsets)
                           ->with('total_hdd',$total_hdd)
                           ->with('total_kb',$total_kb)
                           ->with('total_m',$total_m)
                           ->with('total_monitor',$total_monitor)
                           ->with('total_cpu',$total_cpu)
                           ->with('total_qty',$total_qty);
    }
}
