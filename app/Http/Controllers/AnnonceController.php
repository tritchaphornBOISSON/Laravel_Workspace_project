<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Annonce;
class AnnonceController extends Controller
{
   // public function index()
  //  {
     //   $data = Ad::latest()->paginate(5);
     //   return view('ads.index', compact('data'))
       
     //           ->with('i', (request()->input('page', 1) - 1) * 5);
   // }

public function index(Request $request ){
    $data=Annonce::where([
['category', '!=',NULL],
[function($query)use ($request){
    if(($term=$request->term)){
        $query->orWhere('category','LIKE','%'.$term.'%')->get();
    
    }
}]


    ])


    ->orderBy("id","desc")
    ->paginate(10);
    return view('annonces.index', compact('data'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
}



    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */






    public function create()
    {
        return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
    'title' => 'required',
    'description' => 'required',
    'picture' => 'required|image|max:2048',
    'category' => 'required',
    'price' => 'required',
    'location' => 'required',
    'surface'  => 'required',
    
    ]);

    
    $picture = $request->file('picture');
    $iduser=Auth::id();
    $new_name = rand() . '.' . $picture->getClientOriginalExtension();
    $picture->move(public_path('images'), $new_name);
    $form_data = array(
    'title' => $request->title,
    'description' => $request->description,
    'picture' => $new_name,
    'category' => $request->category,
    'price' => $request->price,
    'location' => $request->location,
    'surface' => $request->surface,
    'iduser' => $iduser,
     
    );
    
    Annonce::create($form_data);
    
    return redirect('annonces')->with('success', 'annonces added successfully.');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Annonce::findOrFail($id);
        return view('annonces.show',compact('data'));
    }


    public function show1($id)
    {
        $data = Annonce::findOrFail($id);
        return view('annonces.show1',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Annonce::findOrFail($id);
        return view('annonces.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $picture_name = $request->hidden_picture;
        $picture = $request->file('picture');
        if($picture != '')
        {
            $request->validate([
                'title'    =>  'required',
                'category'     =>  'required',
                'description'     =>  'required',
                'picture'         =>  'image|max:2048',
                'price'     =>  'required',
                'location'     =>  'required',

            ]);

            $picture_name = rand() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('images'), $picture_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'category'     =>  'required',
                'description'     =>  'required',
                'price'     =>  'required',
                'location'     =>  'required',
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'category'        =>   $request->category,
            'picture'            =>   $picture_name,
            'description'     =>  $request->description,
            'price'     =>  $request->price,
            'location'     =>  $request->location,
        );
  
        Annonce::whereId($id)->update($form_data);

        return redirect('annonces')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Annonce::findOrFail($id);
        $data->delete();

        return redirect('annonces')->with('success', 'Data is successfully deleted');
    }



    public function gallery(){
        $images= Annonce::all();
        return view('welcome')->with('images',$images);
    }



    public function gallery1(){
        $images= Annonce::all();
        return view('Accueil')->with('images',$images);
    }



    public function gallery2(){
        $images= Annonce::all();
        return view('reservations.showAnnonce')->with('images',$images);
    }

  /*  public function gallery2(){
        $images=Annonce::select('*')
        ->join('reservations','annonces.id','=!','reservations.idannonce')
        ->get();
        return view('reservations.showAnnonce')->with('images',$images);
    }
*/


    public function indexAdmin(Request $request ){
        $data=Annonce::where([
    ['category', '!=',NULL],
    [function($query)use ($request){
        if(($term=$request->term)){
            $query->orWhere('category','LIKE','%'.$term.'%')->get();
        
        }
    }]
    
    
        ])
    
    
        ->orderBy("id","desc")
        ->paginate(10);
        return view('annonces.indexAdmin', compact('data'))
                     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    





    public function indexP(Request $request ){
        $images=Annonce::where([
    ['title', '!=',NULL],['surface', '!=',NULL],['category', '!=',NULL],['location', '!=',NULL],['price', '!=',NULL], ['description', '!=',NULL],
    [function($query)use ($request){
        if(($term=$request->term)){
            $query->orWhere('title','LIKE','%'.$term.'%') ->orWhere('surface','LIKE','%'.$term.'%')->orWhere('category','LIKE','%'.$term.'%')->orWhere('location','LIKE','%'.$term.'%')->orWhere('price','LIKE','%'.$term.'%')->orWhere('description','LIKE','%'.$term.'%')->get();
        
        }
    }]
    
    
        ])
    
    
        ->orderBy("id","desc")
        ->paginate(10);
        return view('welcome', compact('images'))
                     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    


}





