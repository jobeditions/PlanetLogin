<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Abonnement;
use App\Category;
use App\Tag;
use Auth;
use Session;
use Storage;

use Gloudemans\Shoppingcart\Facades\Cart;

class AbonnementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnements=Abonnement::orderBy('number','asc')->get();
        $abonnements=Abonnement::paginate(6);

        return view('admin.abonnements.index',compact('abonnements'));
    }
    public function index_modify()
    {
        $abonn=Abonnement::orderBy('number','asc')->get();
        $abonn=Abonnement::paginate(6);

        return view('admin.abonnements.index_modify',compact('abonn'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$abonnements=Abonnement::orderBy('number','asc')->get();
        $categories=Category::all();
        $tags=Tag::all();
        return view('admin.abonnements.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd(request()->all()); 

        $this -> validate($request,[
          
          'title' => 'required|max:255',
          'featured' => 'sometimes|image',
          'description' => 'required|max:500',
          'number' => 'required',
          'category_id' => 'required',
          'tags' => 'required',
          'currency' => 'required',
          'pricenew' => 'required',
          'priceold' => 'required',
           ]);

       
        
        $featuredImage = $request->featured;
        $featuredNew = time().$featuredImage->getClientOriginalName();
        $featuredImage ->move('uploads/abonnements',$featuredNew);
    
        /*if($request->hasFile('featured')){
            $image = $request->file('featured');
            $filename=time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/image' . $filename);
            $image = save($location);

        }*/
        
        $abonnements = Abonnement::create([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'number' => $request->number,
            'description' => $request->description,
            'featured' => 'uploads/abonnements/' . $featuredNew,
            'category_id' => $request->category_id,
            'currency' => $request->currency,
            'pricenew' => $request->pricenew,
            'priceold' => $request->priceold,
        ]);

        $abonnements->tags()->attach($request->tags);
    Session::flash('success', 'Post created succesfully.');
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $abonnements=Abonnement::get();
        $abons=Abonnement::find($id);
        return view('vente.abonnement_offer',compact('abonnements','abons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.abonnements.abonnement_modify');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonnements=Abonnement::find($id);
        
        $abonnements->delete();
        Session::flash('success','Article a été supprimée avec succès');
        return redirect('/admin/abonnement');
    }

     public function trash()
    {
         $abonnements=Abonnement::onlyTrashed()->get();
         
        return view('admin.abonnements.trashpost',compact('abonnements'));
    }

     public function restoretrash($id)
    {
        $abonnement=Abonnement::onlyTrashed()->where('id',$id)->first();
        $abonnement->restore();
        Session::flash('success','Article a été restaurer avec succès');
        return redirect()->back();
    }

      public function kill($id)
    {
        $abonnements=Abonnement::onlyTrashed()->where('id',$id)->first();
        Storage::delete($abonnements->image);
        $abonnements->forcedelete();
        Session::flash('success','Article a été supprimée avec succès');
        return redirect()->back();
    }
}
