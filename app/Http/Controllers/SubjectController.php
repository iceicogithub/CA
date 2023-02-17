<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectM;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\DB;
use App\Models\Cources;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $core = Cources::all();
        $cource = Cources::all(); 
        return view('admin/auth/subjects/subject',compact('core','cource'));
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
        return view('auth/subjects/subject',compact('core','cource'));
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
            'subject_name'=>'required',
            'status'=>'required',
        
        ]); 


        $sub=new SubjectM();
        $sub->subject_name = $request->subject_name;
        $sub->cource_id = $request->cource;
        $sub->status = $request->status;

        $sub->save();    

        if($sub) {
            return back()->with('success', 'added successfully');
        } else {
            return back()->with('fail', 'somthing went wrong try again');
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
        $show = SubjectM::orderBy('id', 'ASC')->get();
        return view('admin/auth/subjects/subject', compact('show'));
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
        $subject =SubjectM::find($id);
        if(!is_null($subject)){
            $subject->delete();
        }
        return redirect()->back();
    }

    public function import()
    {
        $data = DB::table('subject')->orderBy('subjectId', 'DES')->get();
        return view('admin/auth/subjects/subject', compact('data'));
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
