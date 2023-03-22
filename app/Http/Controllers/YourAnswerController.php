<?php

namespace App\Http\Controllers;

use App\Models\yourAnswer;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YourAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $your_id=Auth::id();
        $questions = question::where('answer_id','=',$your_id)->get();
        return view('que-to-you', [
        'questions' => $questions
        ]);
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
     * @param  \App\Models\yourAnswer  $yourAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(yourAnswer $yourAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\yourAnswer  $yourAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(yourAnswer $yourAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\yourAnswer  $yourAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, yourAnswer $yourAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\yourAnswer  $yourAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(yourAnswer $yourAnswer)
    {
        //
    }
}
