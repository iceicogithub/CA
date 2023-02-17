<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectM;
use App\Models\Cources;
use Illuminate\Support\Facades\DB;
Use App\Models\Quizs;
use App\Models\Chapter;

class Quizscontroller extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $core = Cources::all();
        $cource = Cources::all();
        $quiz = DB::table('questions_models')->where('allot_ids', 1)->get();

        return view('admin/auth/quiz/quizs', compact('core', 'quiz', 'cource'));
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
        $quez = new Quizs();
        $quez->cource_id = $request->courses;
        $quez->subject_id = $request->sub;
        $quez->alloat_quiz = $request->get;
        $quez->duration = $request->duration;
        $quez->save();

        // echo"jndckc";

        return back()->with('success', 'Questions  has been  uplaoded successfully.');


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
        $chapter = Chapter::where('subject_id', $request->data)->get();

        return response()->json($chapter);
    }

    // public function quiz(Request $request)
    // {

    //   $quiz = DB::table('quizs')->whereIn('id', $request->get)->update(array('alloat_quiz'=>1));

    //   return view('/admin/auth/quiz/quizs',compact('quiz'));
        
    // }

}