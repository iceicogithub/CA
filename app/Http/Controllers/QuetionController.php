<?php

namespace App\Http\Controllers;

use App\Models\Cources;
use Illuminate\Http\Request;
use App\Models\SubjectM;
use App\Models\Chapter;
use App\Models\QuestionsModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QuetionController extends Controller
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
        $subject = SubjectM::all();
        $chapter = Chapter::all();
        return view('admin/auth/Add-Question/unit', compact('core', 'subject', 'cource', 'chapter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $core = Cources::all();
        $cource = Cources::all();
        $subject = SubjectM::all();
        $chapter = Chapter::all();
        return view('auth/Add-Question/unit', compact('core', 'subject', 'cource', 'chapter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // DB::enableQueryLog();
       
        $question = new QuestionsModel();
        $question->Cource_id = $request->courses;
        $question->Subject_id = $request->subject_name;
        $question->Chapter_id = $request->chapter_name;
        $question->Difficulty_level = $request->difficulty;
        $question->Marks = $request->marks;
        $question->Negative_mark = $request->negative_mark;
        $question->Question_type = $request->question_type;
        $question->Files = $request->file;
        if($request->hasFile('File')) {
            $file = $request->file('File');
            $name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
            $File[''] = $name;
            $file->move(public_path().'/uploads/', $name);      
        }
        $question->Add_question = $request->add_question;
        $question->Option_one = $request->option_one;
        $question->Option_two = $request->option_two;
        $question->Option_three = $request->option_three;
        $question->Option_four = $request->option_four;
        $question->Option_ones = $request->optionone;
        $question->Option_twos = $request->optiontwo;
        $question->Option_threes = $request->optionthree;
        $question->Option_fours = $request->optionfour;
        $question->Right_answer = $request->right_answer;
        $question->optcheck_1 = $request->optcheck1;
        $question->optcheck_2 = $request->optcheck2;
        $question->optcheck_3 = $request->optcheck3;
        $question->optcheck_4 = $request->optcheck4;
        $question->Trues = $request->trues;
        $question->Falses = $request->falses;
        $question->Right_tf = $request->right_tf;
        $question->subjective_answer = $request->sub_ans;
        $question->Explan = $request->explan;
        $question->status = $request->status;
        if(Auth::check()){
            $user = DB::table('users')->where('id',Auth::user()->id)->first();
            $name = $user->name;
            if($user !==" "){
                $question->author = $name;
            }else{
                dd('hello world');
            }
            }
            if(Auth::guard('admin')->check()){
                $user = DB::table('admins')->where('id',Auth::guard('admin')->user()->id)->first();
                $name = $user->name;
                if($user !==" "){
                    $question->author = $name;
                }else{
                    dd('hello world');
                }
           } 
      
        
        
        $question->save();

        // return 'success';
        return back()->with('success');
       
        // if ($question) {
        //     return back()->with('success', 'added successfully');
        // } else {
        //     return back()->with('fail', 'somthing went wrong try again');
        // }
    }


    public function sorttype() {
      
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
        $cource = Cources::all();
        $subject = SubjectM::all();
        $chapter = Chapter::all();
        return view('admin/auth/Add-Question/showlist',compact('core'));
    }

    public function shows()

    {
        $core = Cources::all();
        $cource = Cources::all();
        $subject = SubjectM::all();
        $chapter = Chapter::all();
        return view('auth/Add-Question/showlist',compact('core'));
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
        $question =QuestionsModel::find($id);
        if(!is_null($question)){
            $question->delete();
        }
        return redirect()->back();
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

    public function getQuestionList(Request $request)
    {

        $core = Cources::all();
        $cource = Cources::all();
        $subject = SubjectM::all();
        $chapter = Chapter::all();

        $question = QuestionsModel::all();
        // return view('Add-Question/questionList',compact('question','core','cource','subject','chapter'));
        // $data = [
            $get =
            DB::table("chapters")
            ->leftJoin("subject", function($join){
                $join->on("chapters.subject_id", "=", "subject.id");
            })
            ->leftJoin("cources", function($join){
                $join->on("chapters.cource_id", "=", "cources.id");
            })
            ->leftJoin("questions_models", function($join){
                $join->on("questions_models.Chapter_id", "chapters.id");
            })
            
            ->where('cources.id', $request->course)
            ->where('subject.id', $request->subject)
            ->where('chapters.id', $request->chapter)
            ->get();

            // DB::enableQueryLog(),
            // $get1 = QuestionsModel::where('Cource_id', $request->course)->where('Subject_id', $request->subject)->where('Chapter_id', $request->chapter)->get(),
            //    dd(DB::getQueryLog()),
        // ];
        //    dd($get1);

       return response()->json($get);
    }


}




