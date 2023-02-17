<?php

namespace App\Http\Controllers;

use App\Models\Cources;
use Illuminate\Http\Request;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $core = Cources::where('status', 1)->get();
        return view('Admin/auth/course/cource',compact('core'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $core = Cources::where('status', 1)->get();
        return view('auth/course/cource',compact('core'));
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
            'cource'=>'required',
            'status'=>'required',
        
        ]); 

        $core = new Cources();
        $core->cource = $request->cource;
        $core->status = $request->status;

        $core->save();

        if($core){
            return back()->with('success', 'Course added!!');
        }else{
            return back()->with('fail', 'Error, try again later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $core = Cources::all();
        return view('/path/sidebar',compact('core'));
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
        $course =Cources::find($id);
        if(!is_null($course)){
            $course->delete();
        }
        return redirect()->back();
    }
}
