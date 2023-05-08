<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\product;


class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            // $total_product=product::all()->count();
            // $total_order=order::all()->count();
            // $total_user=user::all()->count();

            // $order=order::all();

            $total_revenue=0;

            // foreach($order as $r){

            //     $total_revenue=$total_revenue+$r->price;
            // }

            // $total_deliver=order::where('delivery_status','=','delivered')->get()->count();
            // $total_processing=order::where('delivery_status','=','processing')->get()->count();


            // return view('admin.home',compact('total_product','total_order','total_user','total_revenue','total_deliver','total_processing'));
               return view('admin.home');
        }
        else{
            // $product=product::paginate(6);
            return view('home.index',compact('product'));
        }
    }
}
