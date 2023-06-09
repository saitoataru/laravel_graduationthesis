<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChatGptController;
use App\Http\Controllers\YourAnswerController;
use App\Http\Controllers\AnswerToQueController;

use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//本：ダッシュボード表示(books.blade.php)
Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');
// Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/good', [GoodController::class,'index'])->middleware(['auth'])->name('good');

//コメント→エラーにしている
Route::get('/comment', [CommentController::class,"index"])->middleware(['auth'])->name('comment');



//本：追加 
Route::post('/books',[BookController::class,"store"])->name('book_store');

//本：削除 
Route::delete('/book/{book}', [BookController::class,"destroy"])->name('book_destroy');

//本：更新画面
Route::post('/goodsedit/{book}',[BookController::class,"edit"])->name('book_edit'); //通常
Route::get('/goodsedit/{book}', [BookController::class,"edit"])->name('edit');      //Validationエラーありの場合

//本：更新画面
Route::post('/books/update',[BookController::class,"update"])->name('book_update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//認証のroute
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ショートムービー検証
Route::get('video/stream', [VideoController::class,'stream'])->middleware(['auth'])->name('video');

//ユーザーページ検証
Route::get('user/{user_id}',[UserInfoController::class,'index'])->middleware(['auth'])->name('user');

//検索検証
Route::get('/search', [GoodController::class, 'search'])
    ->name('search');

//みんなの回答ページへの遷移
Route::get('/expart',[QuestionController::class,'index_expart'])->middleware(['auth'])->name('expart');
//みんなの回答ページへの遷移
Route::get('/answers',[QuestionController::class,'index_answer'])->middleware(['auth'])->name('answer');

//質問入力画面
Route::get('/question/{user_id}',[QuestionController::class,'question'])->middleware(['auth'])->name('question');
//質問登録画面
Route::post('/question/store',[QuestionController::class,'store'])->middleware(['auth'])->name('que.store');

Route::get('/chat', [ChatGptController::class, 'index'])->name('chat_gpt-index');
Route::post('/chat', [ChatGptController::class, 'chat'])->name('chat_gpt-chat');

Route::get('/youranswer', [YourAnswerController::class, 'index'])->name('your_answer');
Route::get('/youranswer-to-que{id}', [AnswerToQueController::class, 'index'])->name('answer_to_que');
Route::post('/youranswer-to-que/store', [AnswerToQueController::class, 'store'])->name('answer_to_que.store');