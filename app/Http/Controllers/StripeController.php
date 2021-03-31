<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Stripe;
use Session;

class StripeController extends Controller
{
    public function index()
    {
        $checkout=Cart::content();
    	return view('frontend.checkout', compact('checkout'));
    }
  
    public function makePayment(Request $request)
    {
            $total= str_replace([',', '.'], ['', ''],$request->total);
            // dd($total);
            
            \Stripe\Stripe::setApiKey('sk_test_51HRYkHLVyBJtXGUEuZQipTkkDlywyVqEIndjk29oziMdGFj73kV7mJUcnzJTaRizUDqLCCjRrJlBPysf9stcted400YxRqxQxY');
            $token = $request->stripeToken;


			$charge = \Stripe\Charge::create([
			    'amount' => $total,
			    'currency' => 'usd',
			    'description' => 'Order Done',
			    'source' => $token,
			    'metadata' => ['order_id' => uniqid()],
			]);

        Cart::destroy();
    	    	 if (Session::has('coupon')) {
			 	 Session::forget('coupon');
    	     }
          
             return Redirect()->to('/');
    }
}
