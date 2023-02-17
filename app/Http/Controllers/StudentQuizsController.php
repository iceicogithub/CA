<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectM;
use App\Models\Chapter;
use App\Models\Cources;
use App\Models\Quizs;
use App\Models\QuestionsModel;

class StudentQuizsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cource = Cources::all();
        
        return view('quez', compact('cource'));
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

    public function getSubjectList(Request $request)
    {
        // DB::enableQueryLog();
        $subject = SubjectM::where('cource_id', $request->data)->get();

       
        return response()->json($subject);
    }

    public function getchapterlist(Request $request)
    {
        // DB::enableQueryLog();

        // dd(DB::getQueryLog());
        $chapter = Chapter::where('subject_id', $request->data)->get();

        return response()->json($chapter);
    }

    public function getQuizquestion(Request $request)
    {
        // DB::enableQueryLog();
        // dd(DB::getQueryLog());
        $quiz = Quizs::where('subject_id', $request->data)->pluck('alloat_quiz')->toArray();
        // $gets = implode(",", $quiz);
        // // dd($gets);
        // $id = preg_split("/\,/", $gets);

        // $ids = QuestionsModel::whereIn('id', $id)->get();
        
        // foreach ($quiz as $q) 
        // {

        //     $get = $q;

        // }   
        

        return response()->json($quiz);
    }
    
   public function getQuiz(Request $request,$data){

     $ids = explode(",",$data);
    
     $quiz = QuestionsModel::whereIn('id', $ids)->get();
    

     return view('quezquestion', compact('quiz'));
   }

   
}
