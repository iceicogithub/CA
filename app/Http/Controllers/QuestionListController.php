<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_question;
use App\Models\SubjectM;
use App\Models\Chapter;

class QuestionListController extends Controller
{
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
}
