<?php

   

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Annonce;

use Illuminate\Http\Request;

use Session;

use Stripe;

   

class StripePaymentController extends Controller

{

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripe(Request $request)

    {   $price=$request->price;

        return view('stripe')->with('price',$price);

    }

  

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripePost(Request $request)

    {
        
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([

                "amount" => $request->price,

                "currency" => "eur",

                "source" => $request->stripeToken,

                "description" => "Test payment" 

        ]);

  

        Session::flash('success', 'Paiement réussi avec succès !');

        return redirect('reservations');

        return back();

    }

}