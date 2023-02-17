<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Cources;
use App\Models\questionPaper;
use App\Models\SubjectM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\PaperQuestions;

use function PHPSTORM_META\type;

class QuestionpaperController extends Controller
{
    public function index()
    {
        $core = Cources::all();
        $cource = Cources::all();
        $subject = SubjectM::all();
        $chapter = Chapter::all();
        return view("admin/auth/questionlist/Questionpaper", compact("core", "subject", "chapter", "cource"));
        // return view('questionlist/Questionpaper',compact('core'));
    }

    public function create()
    {
        $core = Cources::all();
        $cource = Cources::all();
        $subject = SubjectM::all();
        $chapter = Chapter::all();
        return view("auth/questionlist/Questionpaper", compact("core", "subject", "chapter", "cource"));
        // return view('questionlist/Questionpaper',compact('core'));
    }

    public function storelink(Request $request){
        $question = new questionPaper();
        $question->google_link = $request->link;
        $question->subject_id = $request->subject;
        $question->paper_Name = $request->ppr_name;
        $question->status = $request->status;
        $question->paper_Type = $request->ppr_type;
        $question->total_mark = $request->mark;
        $question->Duration = $request->ppr_time;
        $question->save();
 

    }
    public function getchapterlist(Request $request)
    {
        // DB::enableQueryLog();

        // dd(DB::getQueryLog());
        $chapter = Chapter::where('subject_id', $request->data)->get();

        return response()->json($chapter);
    }

    public function getQuestionPaperList(Request $request)
    {
        $get = DB::table("subject")
            ->leftJoin("questions_models", function ($join) {
                $join->on("subject.id", "=", "questions_models.subject_id");
            })
            ->where("subject.id", $request->subject)
            ->get();
        return response()->json($get);
    }
    public function store(Request $request)
    {

        $get = [
            $s = $request->cource,
            $e = $request->subject,
            $h = $request->chapterName
        ];


        return response()->json($get);
    }

    public function save(Request $request)
    {
        DB::table("paper_questions")->insert([
            "paper_name" => $request->paper_name,
            "paper_type" => $request->paper_type,
            "cource_id" => $request->cource_id,
            "subject_id" => $request->subject_id,
        ]);
    }




    public function view()
    {
        $show = DB::table('question_paper')->get();
        // $core = Cources::all();
        // return view('questionlist/listquestion', compact('core'));
        $core = Cources::all();
        // $cource = questionPaper::all();
        return view("admin/auth/questionlist/listquestion", compact("core",  "show"));
    }
    public function views()
    {
        $show = DB::table('question_paper')->get();
        // $core = Cources::all();
        // return view('questionlist/listquestion', compact('core'));
        $core = Cources::all();
        // $cource = questionPaper::all();
        return view("auth/questionlist/listquestion", compact("core",  "show"));
    }
    public function viewdata(Request $request, $id)
    {
        $output = '';
        $data = questionPaper::findOrfail($id);
        // $ids = explode(',', $data['question_papers_ids']);
        $ids = preg_split("/\,/", $data->question_papers_ids);
        $datas = DB::table('questions_models')
            ->select('questions_models.*')
            ->DISTINCT()
            ->leftJoin('question_paper', function ($join) {
                $join->on('questions_models.id', 'question_paper.question_papers_ids');
            })
            ->whereIn('questions_models.id', $ids)
            ->get();
        if (isset($datas)) {
            $output .= "
        <table class='table table-hover'>
        <thead>
            <tr>
                <th>SR. NO</th>
                <th>Question Type</th>
                <th>Question</th>
                <th>Right Answer</th>
                <th>Explanation</th>
                <th>Marks</th>
            </tr>
        </thead>
        <tbody>
            <tr>";
            $i = 1;
            foreach ($datas as $r)
                $output .= "
                <td>" . $i++ . "</td>               
                <td>" . $r->Question_type . "</td>               
                <td>" . $r->Add_question . "</td>
                <td>" . $r->Right_answer . "</td>
                <td>" . $r->Explan . "</td>
                <td>" . $r->Marks . "</td>
            </tr>
            ";
            // }
            $output .= "
        </tbody>
    </table>
        ";
        } else {
            $output .= "<span class='bg-danger text-white p-2'>Something is wrong</span>";
        }
        return response($output);
    }
    public function userChangeStatus(Request $request)
    {
        Log::info($request->all());
        // dd($request);
        $s = questionPaper::find($request->id);
        $s->status = $request->status;
        $s->save();
        return response()->json(['success' => 'Status change successfully.']);
    }
    public function fileUpload(Request $request)
    {
        $request->validate([
            'quefile' => 'required|mimes:docx,pdf',
            'ansfile' => 'required|mimes:docx,pdf',
            'paper_name' => 'required',
            'status' => 'required',
        ]);
        $fileModel = new    questionPaper();
        $fileName =  $request->quefile->getClientOriginalName();
        $filePath = $request->quefile->move(public_path('uploads'), $fileName);
        $fileModel->quefile = '' . $fileName;
        $fileNameans =  $request->ansfile->getClientOriginalName();
        $filePathans = $request->ansfile->move(public_path('uploads'), $fileNameans);
        $fileModel->ansfile = '' . $fileNameans;
        $fileModel->paper_Name =  $request->paper_name;
        $fileModel->paper_Type =  $request->paper_type;
        $fileModel->Duration =  $request->paper_time;
        $fileModel->total_mark =  $request->total_mark;
        $fileModel->subject_id =  $request->subject;
        $fileModel->status =  $request->status;
        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.')
            ->with('file', $fileName);
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

    public function fetch(Request $request)
    {
        // dd('hello world ');
        $store = [
            $crsids = $request->crsId,
            $subids = $request->subId,
            $chpids = $request->ids,
        ];

        // dd($id);
        //   $core = Cources::all();

        // DB::enableQueryLog();
        // $get =
        //     DB::table("question_paper")
        //     ->leftJoin("questions_models", function ($join) {
        //         $join->on("questions_models.Chapter_id", "=", "question_paper.chapter_id");
        //     })->whereIn('questions_models.Chapter_id', $id)
        //     ->get();


        return response()->json($store);
        //   dd($get);
        // dd(DB::getQueryLog());

        // return view('/admin/auth/questionlist/showquestionpaper', compact("store"));
    }
    public function viewqes(Request $request)
    {
        $core = Cources::all();
 
        // $pprids = $request->pprId,
        // $stids = $request->stId,
        // $tpids = $request->tpId,
        // $subids = $request->subId,
        // $crsids = $request->crsId,
        // $chpids = $request->ids,
        $getsub = $request->getsub;
        $getcrs = $request->getcrs;
        $getchp = $request->getchp;

         $type = $request->data;
         if($type){
            $data = DB::table('questions_models')->where('Question_type', $type )->get();
            return  response()->json($data);
         }
        //  dd($data);
        $getchp = $request->getchp;
        $qus = preg_split("/\,/", $getchp);
        $search = $request['search'] ?? "";
        if($search != ""){
            $qus = DB::table('questions_models')
            ->whereIn('Chapter_id', $qus)->where('Question_type', 'LIKE', "%$search%")
            ->get(); 
        }else{
            $qus = DB::table('questions_models')
            ->whereIn('Chapter_id', $qus)
            ->get();
        }
       
      

       

        //   dd($qus);

        return view("admin/auth/questionlist/showquestionpaper", compact("core", "qus", "getcrs", "getsub", "getchp","search"));
    }

    public function fetching(Request $request)
    {
        $get = [
            $getppr = $request->ppr,
            $getst = $request->st,
            $getpty = $request->pty,
            $getptime = $request->ptime,
            $getmark = $request->tmark,
            $getcrs = $request->crs,
            $getsub = $request->sub,
            $getchp = $request->chp,
            $getid = $request->id,
            $getinst = $request->instruction,
        ];

        return response()->json($get);
    }
    public function addques(Request $request)
    {
        $core = Cources::all();

        $get = $request->id;

        $ids = preg_split("/\,/", $get);

        $addq = DB::table('questions_models')
            ->whereIn('id', $ids)
            ->get();

        return view("admin/auth/questionlist/formatppr", compact("core", "addq"));
    }

    public function finalppr(Request $request)
    {

        $getppr = $request->getppr;
        $getst = $request->getst;
        $getpty = $request->getpty;
        $gettime = $request->getptime;
        $getmark = $request->gettmark;
        $getcrs = $request->getcrs;
        $getsub = $request->getsub;
        $getchp = $request->getchp;
        $getid = $request->getid;

        $getinst = $request->getinst;
        $getid = $request->getid;
        $ids = preg_split("/\,/", $getid);

        $sques = DB::table('questions_models')
            ->whereIn('id', $ids)
            ->get();


        $core = Cources::all();
        return view("admin/auth/questionlist/pdfquestion", compact('core', 'getppr', 'getst', 'getpty', 'gettime', 'getmark', 'getcrs', 'getid', 'getsub', 'getchp', 'getinst', 'sques'));
    }

    public function storeppr(Request $request)
    {

        $question = new questionPaper();
        $question->paper_Name = $request->ppr;
        $question->status = $request->st;
        $question->paper_Type = $request->pty;
        $question->subject_id = $request->sub;
        $question->cource_id = $request->crs;
        $question->chapter_id = $request->chp;
        $question->question_ids = $request->id;
        $question->changed_mark = $request->changed_mark;
        $question->total_mark = $request->total_mark;
        $question->changed_ques_nu = $request->changed_quesno;
        $question->instruction = $request->instruction;
        $question->Duration = $request->time;
        $question->save();
    }
    public function storeproduct(Request $request){
        $pprids = $request->getpprids;
       
        $getppr = DB::table('question_paper')->whereIn('id', $pprids)->update(array('alot_product' => 1));

        dd(DB::table('question_paper')->where('alot_product', 1)->get());
        
    }

    public function destroy($id){
        $chapter =questionPaper::find($id);
        if(!is_null($chapter)){
            $chapter->delete();
        }
        return redirect()->back();
    }
}
