<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tag' => 'required'
        ]);
        Tag::create([
            'tag' => $request->tag
        ]);
        Session::flash('success', 'Tag created successfully.');
        return redirect()->route('tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('admin.tags.modifytags',compact('tags'));
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
            'tag' => 'required'
        ]); 
        $tags = Tag::find($id);
        $tags->tag = $request->tag;
        $tags->save();
        Session::flash('success', 'Tag updated!');
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
