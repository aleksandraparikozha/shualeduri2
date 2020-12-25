<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/register', 'Auth\AuthController@getRegister');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/quizz', [\App\http\Controllers\QuestionController::class, 'index'] )->name('questions');

Route::post('/result', [\App\http\Controllers\QuestionController::class, 'result'])->name('result');

Route::group(['middleware' => ['role:admin']], function () {




Route::get('/add_question',[\App\http\Controllers\QuestionController::class, 'create'] )->name('questions.create');

Route::post('/question/save_question', [\App\http\Controllers\QuestionController::class, 'save'])->name('questions.save');


});
