<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ObjectiveTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ids = DB::table('products')->pluck('paper_alloted')->last();
        
        $array = explode(',',$ids);
     
        $paper =DB::table('question_paper')->whereIn('id', $array)->get();
      
      return view('frontend/student/Test/objectivetest',compact('paper'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $paper = DB::table('question_paper')->where('id', $id)->get();
        return view('frontend/student/Test/objpremiumtest', compact('paper'));
    }

    public function insert(Request $request, $id)
    {
        $paper = DB::table('question_paper')->where('id', $id)->get();
        return view('frontend/student/Test/objactiontest',compact('paper'));
    }

    public function test(Request $request, $id){
        $paper = DB::table('question_paper')->where('id', $id)->get();
        
        return view('frontend/student/Test/objtestpaper', compact('paper')); 
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
}
