<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
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
        
        $cat=Category::orderby('order','asc')->get();
        $cat=Category::paginate(7);
        return view('admin.category.indexcategory',compact('cat'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
        'name' => 'required|max:255',
        'order' => 'required',
        ]);

        $cat = new Category;
        $cat->name = $request->name;
        $cat->order = $request->order;
        $cat->slug = str_slug($request->name);
        $cat->save();
        Session::flash('success','Vous avez créé la catégorie avec succès');
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
       $cat=Category::find($id);
        $cat->delete();
        Session::flash('success','La catégorie a été supprimée avec succès');
        return redirect()->back();
    }
}
