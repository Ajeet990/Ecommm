<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;

use Session;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{
    function index()
    {
        $data = product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = product::find($id);
        // return product::where('id',$id)->get();
        return view('details',['detail'=>$data]);
    }
    function search(Request $req)
    {
        // return $req->input();
        $data = product::where('name','like','%'.$req->input('search').'%')->get();
       return view('search_res',['result'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');

        }
        else{
            return redirect('login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();

    }

    function cartlist()
    {
        $userId = Session()->get('user')['id'];
        $products = DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->get();
        return view ('cartlist',['list'=>$products]);
    }
    function d_product($idd)
    {
        $data = cart::find($idd);
        DB::table('cart')->where('product_id',$idd)->delete();
        return redirect('cartlist');
    }

    function order()
    {
        $userId = Session()->get('user')['id'];
        $total = DB::table('cart')->join('products','product_id','=','products.id')->where('cart.user_id',$userId)->sum('products.price');
        return view('orders',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId = Session()->get('user')['id'];

        $totalCart = Cart::where('user_id',$userId)->get();
        foreach($totalCart as $total)
        {
            $ord = new order;
            $ord->product_id = $total['product_id'];
            $ord->user_id = $total['user_id'];
            $ord->status = "pending";
            $ord->payment_method = $req->paymethod;
            $ord->payment_status = "pending";
            $ord->address = $req->address;
            $ord->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');

    }

    function myorder()
    {
        $userId = Session()->get('user')['id'];
        $items = DB::table('orders')->join('products','products.id','=','orders.product_id')->where('orders.user_id',$userId)->get();
        return view('myorder',['items'=>$items]);
    }

    
}
