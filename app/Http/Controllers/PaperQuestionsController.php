<?php

namespace App\Http\Controllers;

use App\Models\PaperQuestions;
use Illuminate\Http\Request;
use App\Models\Cources;
use App\Models\SubjectM;
use App\Models\Chapter;

class PaperQuestionsController extends Controller
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
        return view("admin/auth/questionlist/Questionpaper", compact("core", "subject", "chapter" ,"cource"));
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
     * @param  \App\Models\PaperQuestions  $paperQuestions
     * @return \Illuminate\Http\Response
     */
    public function show(PaperQuestions $paperQuestions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaperQuestions  $paperQuestions
     * @return \Illuminate\Http\Response
     */
    public function edit(PaperQuestions $paperQuestions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaperQuestions  $paperQuestions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaperQuestions $paperQuestions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaperQuestions  $paperQuestions
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaperQuestions $paperQuestions)
    {
        //
    }
}
