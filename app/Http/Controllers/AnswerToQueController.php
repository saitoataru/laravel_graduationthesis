<?php

namespace App\Http\Controllers;

use App\Models\Answer_to_Que;
use App\Models\question;
use Illuminate\Http\Request;
use Validator;

class AnswerToQueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $questions=question::where('id','=',$id)->get();

        return view('answer-to-que', [
            'questions' => $questions
        ]) ;
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
        $validator = Validator::make($request->all(),[
             'answer_num' => 'required',
             'answer_id' => 'required',
             'answer_comment' => 'required',
             'answer_item_URL' => 'required',
             'answer_item_URL' => 'required',
             
            
        ]);
                if ($validator->fails()) {
            return redirect('/youranswer-to-que{id}')
                ->withInput()
                ->withErrors($validator);
        }
        
        $Answer_to_Ques = new Answer_to_Que;
        $Answer_to_Ques->answer_num   = $request->answer_num;
        $Answer_to_Ques->answer_id   = $request->answer_id;
        $Answer_to_Ques->questioner_id   = $request->questioner_id;
        $Answer_to_Ques->answer_comment   = $request->answer_comment;
        $Answer_to_Ques->answer_item_URL = $request->answer_item_URL;
        $Answer_to_Ques->que_title   = $request->que_title;
        $Answer_to_Ques->que_comment = $request->que_comment;
        $Answer_to_Ques->save(); 
	    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer_to_Que  $answer_to_Que
     * @return \Illuminate\Http\Response
     */
    public function show(Answer_to_Que $answer_to_Que)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer_to_Que  $answer_to_Que
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer_to_Que $answer_to_Que)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer_to_Que  $answer_to_Que
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer_to_Que $answer_to_Que)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer_to_Que  $answer_to_Que
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer_to_Que $answer_to_Que)
    {
        //
    }
}
