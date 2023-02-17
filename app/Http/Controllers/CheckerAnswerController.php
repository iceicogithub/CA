<?php

namespace App\Http\Controllers;

use App\Models\CheckerAnswer;
use Illuminate\Http\Request;
use App\Models\Cources;
use App\Models\Chapter;
use App\Models\SubjectM;

class CheckerAnswerController extends Controller
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
     return view('admin/auth/AnswerSheetChecker/checkeranswer', compact('core','cource','subject','chapter'));
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
     * @param  \App\Models\CheckerAnswer  $checkerAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(CheckerAnswer $checkerAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckerAnswer  $checkerAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckerAnswer $checkerAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckerAnswer  $checkerAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckerAnswer $checkerAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckerAnswer  $checkerAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckerAnswer $checkerAnswer)
    {
        //
    }
}
