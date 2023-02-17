<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Cources;
use App\Models\SubjectM;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

use Illuminate\Support\Facades\Validator;
class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $core = Cources::all();
        $cource =Cources::all(); 
        $subject = SubjectM::all();
        return view('admin/auth/chapter/chapter',compact('core','cource','subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $core = Cources::all();
        $cource =Cources::all(); 
        $subject = SubjectM::all();
        return view('auth/chapter/chapter',compact('core','cource','subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = array(
        'cource' => 'required',
        'chapter_name' => 'required',
        'subject_name'=> 'required',
      );

      $validation =  validator::make($request->all(), $rule);
    
        $chap = new Chapter();
        $chap->subject_id = $request->subject;
        $chap->cource_id = $request->courses;
        $chap->chapter_name = $request->chapter_name;
        $chap->status = $request->status;

        $chap->save();
        if($validation->passes()){
            return response()->json(['success' => 'Chapter added succesfully.']);
        }   

        return response()->json(['error'=>$validation->errors()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Chapter::all();
        return view('admin/auth/chapter/chapter',compact($show));
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
        $chapter =Chapter::find($id);
        if(!is_null($chapter)){
            $chapter->delete();
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
}

