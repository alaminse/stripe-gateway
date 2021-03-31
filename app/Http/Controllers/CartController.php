<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;

class CartController extends Controller
{
    public function addCart($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        
        $data = array();
        $data['id']=$product->id;
        $data['name']=$product->product_name;
        $data['qty']=1;
        $data['price']= $product->selling_price;          
        $data['weight']=1;
        $data['options']['image']=$product->image_one;
        Cart::add($data);
        $notification=array(
            'messege'=>'Successfully Done',
                'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function check()
    {
    	$content=Cart::content();
    	return response()->json($content);
    }
    public function showCart()
    {
        $cart=Cart::content();
    	return view('frontend.cart', compact('cart'));
    }
}
