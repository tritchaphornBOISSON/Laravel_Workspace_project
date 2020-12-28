<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Session;

use Stripe;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::all();
        return view('reservations.index', compact('reservation'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        return view('reservations.create')->with('images',$images);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
            'idannonce'=>'require',
        ]);
        $iduser=Auth::id();
       $form_data = array(
            'title' => $request->title,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'iduser' => $iduser,
            'idannonce'=>$request->id,
            );
            
            Reservation::create($form_data);
             
          //  return redirect('stripe');  
            
            
            
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



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
        return view('reservations.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        return view('reservations.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        $request->validate([
        
            'date_debut' => 'date',
        
            'date_fin' => 'date',
        
        ]);
        $reservation->update($request->all());
         
         
        
        
        
        $reservation->save();
        
        return redirect()->route('reservations.index')

            ->with('success','Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')

                        ->with('success','Res deleted successfully');
    }





    public function indexAdmin1()
    {
        $reservation = Reservation::all();
        return view('reservations.indexAdmin1', compact('reservation'))->with('i',(request()->input('page',1)-1)*5);
    }


}


  

   