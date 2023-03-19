<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class UserInfoController extends Controller
{
    public function index($user_id){
        // $books =  \DB::table('books')->where('user_id',$user_id)->get();
        // return view('user', [
        //     'books' => $books]
        // );
        $books = Book::where('user_id','=',$user_id)->get();
        $users = User::where('id','=',$user_id)->get();
        return view('user', [
            'books' => $books
        ],['users'=>$users]
        );
        // return view ($user_id);
    }
}


