<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
     
        $tags=Tag::orderby('order','asc')->get();
        $tags=Tag::paginate(7);
        return view('admin.tags.indextag',compact('tags'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
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

        $tagging = new Tag;
        $tagging->name = $request->name;
        $tagging->order = $request->order;
        $tagging->slug = str_slug($request->name);
        $tagging->save();
        Session::flash('success',"Vous avez créé l'étiquette avec succès");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('admin.tags.modifytag',compact('tags'));
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
      $this->validate($request, [
        'name' => 'required|max:255',
        'order' => 'required',
        'slug' => 'required',
        ]); 
        $tagging = Tag::find($id);
        $tagging->name = $request->name;
        $tagging->order = $request->order;
        $tagging->slug = $request->slug;
        $tagging->save();
        Session::flash('success', "Vous avez modifiée l'étiquette avec succès.");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags=Tag::find($id);
        $tags->delete();
        Session::flash('success',"L'étiquette a été supprimée avec succès");
        return redirect()->back();
    }

    public function trash()
    {
         $tags=Tag::onlyTrashed()->get();
         
        return view('admin.tags.trashtag',compact('tags'));
    }
    public function restoretrash($id)
    {
        $tags=Tag::onlyTrashed()->where('id',$id)->first();
        $tags->restore();
        Session::flash('success',"L'étiquette a été restaurer avec succès");
        return redirect()->back();
    }


    public function kill($id)
    {
        $tags=Tag::onlyTrashed()->where('id',$id)->first();
        $tags->forcedelete();
        Session::flash('success',"L'étiquette a été supprimée avec succès");
        return redirect()->back();
    }

}
