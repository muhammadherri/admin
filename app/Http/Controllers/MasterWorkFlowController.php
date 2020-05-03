<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\msworkflow;
use DB;
class MasterWorkFlowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msworkflow = DB::table('msworkflow')->paginate(3);
        return view('msworkflow.index',['msworkflow'=> $msworkflow]);
    }
    
   
    public function create(Request $request)
    {
        \App\msworkflow::create($request->all());
        return redirect('/msworkflow')->with('sukses','Data Berhasil Di Input,SUKSES');
    }

    public function search(Request $request,msworkflow $msworkflow)
    {
      
        $search = $request->get('search');
        $msworkflow = DB::table('msworkflow')->where('WFCode','like','%'.$search.'%')->paginate(5);
        return view('msworkflow.index',['msworkflow'=>$msworkflow]);
    }

    public function search2(Request $request,msworkflow $msworkflow)
    {
      
        $search2 = $request->get('search2');
        $msworkflow = DB::table('msworkflow')->where('WFName','like','%'.$search2.'%')->paginate(5);
        return view('msworkflow.index',['msworkflow'=>$msworkflow]);
    }

    public function search3(Request $request,msworkflow $msworkflow)
    {
      
        $search3 = $request->get('search3');
        $msworkflow = DB::table('msworkflow')->where('Status','like','%'.$search3.'%')->paginate(5);
        return view('msworkflow.index',['msworkflow'=>$msworkflow]);
    }
    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $msworkflow = \App\msworkflow::find($id);
        return view('msworkflow.edit',['msworkflow'=>$msworkflow]);
    }

   
    public function update(Request $request, $id)
    {
        $msworkflow = \App\msworkflow::find($id);
        $msworkflow->update($request ->all());
        return redirect('/msworkflow')->with('sukses','Data Berhasil Di Update');
    }

   
    public function destroy($id)
    {
        $msworkflow = \App\msworkflow::find($id);
        $msworkflow ->delete($msworkflow);
        return redirect('/msworkflow')->with('sukses','Data Berhasil Di Hapus');
   
    }
}
