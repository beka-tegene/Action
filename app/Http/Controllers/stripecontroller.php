<?php

namespace App\Http\Controllers;

use Stripe;
use Session;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripePyament(Request $req)
    {
    	//print_r($req->all()); die();
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    	$data = Stripe\Charge::create([
    			"amount"=>2*100,
    			"currency"=>"usd",
    			"source"=>$req->stripeToken,
    			"description"=>"Test payment from expert rohila 2"
    	]);
        echo "<pre>"; print_r($data); die();

    	Session::flash("success","Payment successfully!");

    	return back();
    }
}
