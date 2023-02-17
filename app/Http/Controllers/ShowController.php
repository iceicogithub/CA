<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cources;
use App\Models\SubjectM;
use App\Models\Chapter;

class ShowController extends Controller

{
    public function index()
    {
        $core = Cources::all();
        $cource = Cources::all();
        return view('Add-Question/showlist',compact('core','cource'));
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
        //
    }

    public function getSubjectList(Request $request)
    {    
    // DB::enableQueryLog();
        $subject = SubjectM::where('cource_id', $request->data)->get();
        
        // dd(DB::getQueryLog());
        // $chapter =Chapter::where('subject_id', $request->data)->first();
        // if (!empty($chapter)){
        //     $data = array ('id' =>$chapter->id,'chapter_name');
        // }
        // dd($data);
        return response()->json($subject);
    }
    
    public function getchapterlist(Request $request)
    {    
    // DB::enableQueryLog();
    
        // dd(DB::getQueryLog());
        $chapter =Chapter::where('subject_id', $request->data)->get();

        return response()->json($chapter);
    }

}
