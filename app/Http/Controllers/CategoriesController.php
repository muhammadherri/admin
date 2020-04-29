<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->paginate(3);
        //$categories = \App\Categories::all();
        return view('categories.index',['categories'=> $categories]);        
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $categories = DB::table('categories')->where('CategoryName','like','%'.$search.'%')->paginate(5);
        return view('categories.index',['categories'=>$categories]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Categories::create($request->all());
        return redirect('/categories')->with('sukses','Data Berhasil Di Input,SUKSES');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $categories = \App\Categories::find($id);
        return view('categories.edit',['categories'=>$categories]);
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
        $categories = \App\Categories::find($id);
        $categories->update($request ->all());
        return redirect('/categories')->with('sukses','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = \App\Categories::find($id);
        $categories ->delete($categories);
        return redirect('/categories')->with('sukses','Data Berhasil Di Hapus');
    }
}
