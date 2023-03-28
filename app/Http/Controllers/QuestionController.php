<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\Answer_to_Que;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;


class QuestionController extends Controller
{
    //view機能
    public function index_answer()
    {
        $AnswerToQues = Answer_to_Que::all();
        return view('searchAnswer', [
        'AnswerToQues' => $AnswerToQues
        ]);
    }
    
     public function index_expart()
    {   
        $users = User::all();
        return view('searchExpart', [
            'users' => $users
        ]); 
    }
    
    public function question($user_id)
    {   
        $questioner_id = Auth::id();
        // $ids = Auth::id();
        $users = User::where('id','=',$user_id)->get();
        return view('question',['users'=>$users],['questioner_id'=>$questioner_id]); 
    }

 
    public function create()
    {
        //
    }

    //質問
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'que_title' => 'required|min:3|max:255',
            'que_comment' => 'required|min:5|max:255',
            'item_URL' => 'required|min:5',
            ]);
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        $questions = new question;
        $questions->answer_id   = $request->answer_id;
        $questions->que_title   = $request->que_title;
        $questions->que_comment   = $request->que_comment;
        $questions->item_URL = $request->item_URL;
        $questions->questioner_id = Auth::id();
        // $questions->image   = $request->image;

       
        $questions->save(); 
	    return redirect('/question/{user_id}');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        //
    }
}
