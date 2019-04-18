<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usercred;
use App\accessory;
use App\Component;
use App\System_Unit;
use App\Category;

class Guestdashboard extends Controller
{
    public function index()
    {

        $total_users = Usercred::where('status','=','active')->count('id');
        

        /* total headset */
        $total_qty = accessory::where('category_id','=',3)->sum('quantity');
        $total_o_qty = accessory::where('category_id','=',3)->sum('order_qty');
        $total_headsets = $total_qty - $total_o_qty;
        /* end total headset */
        
        
        
        /* total keyboard */
        $total_qty = accessory::where('category_id','=',4)->sum('quantity');
        $total_o_qty = accessory::where('category_id','=',4)->sum('order_qty');
        $total_kb = $total_qty - $total_o_qty;
        /* end total keyboard */

        /* total mouse */
        $total_qty = accessory::where('category_id','=',2)->sum('quantity');
        $total_o_qty = accessory::where('category_id','=',2)->sum('order_qty');
        $total_m = $total_qty - $total_o_qty;
        /* end total mouse */
		
		/* total  wireless mouse/keyboard */
        $total_qty = accessory::where('category_id','=',14)->sum('quantity');
        $total_o_qty = accessory::where('category_id','=',14)->sum('order_qty');
        $total_mk = $total_qty - $total_o_qty;
        /* end total wireless mouse/keyboard */
		
		
		/* total  VGA Cable */
        $total_qty = accessory::where('category_id','=',10)->sum('quantity');
        $total_o_qty = accessory::where('category_id','=',10)->sum('order_qty');
        $total_vga = $total_qty - $total_o_qty;
        /* end total VGA Cable */
		
		
		/* total  HDMI Cable */
        $total_qty = accessory::where('category_id','=',9)->sum('quantity');
        $total_o_qty = accessory::where('category_id','=',9)->sum('order_qty');
        $total_hdmi = $total_qty - $total_o_qty;
        /* end total HDMI Cable */

        
		
		/* total hdd */
        $total_qty = component::where('category_id','=',5)->sum('total');
        $total_o_qty = component::where('category_id','=',5)->sum('order_qty');
        $total_hdd = $total_qty - $total_o_qty;
        /* end total hdd */
		
		 /* total ssd */
        $total_qty = component::where('category_id','=',6)->sum('total');
        $total_o_qty = component::where('category_id','=',6)->sum('order_qty');
        $total_ssd = $total_qty - $total_o_qty;
        /* end total ssd */

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
						   ->with('total_ssd',$total_ssd)
                           ->with('total_kb',$total_kb)
                           ->with('total_m',$total_m)
						   ->with('total_mk',$total_mk)
						   ->with('total_vga',$total_vga)
						   ->with('total_hdmi',$total_hdmi)
                           ->with('total_monitor',$total_monitor)
                           ->with('total_cpu',$total_cpu)
                           ->with('total_qty',$total_qty)
                           
                           ->with('cat_accessory', Category::where('type','Accessory')->orderby('category_name','asc')->get())
                           ->with('accessories',accessory::all()->sum('quantity'));
    }
}
