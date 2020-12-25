<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class QuestionController extends Controller
{
    public function index(){
        $questions = Questions::all();
        return view('quizz')->with('questions', $questions);
    }

    public function show(Questions $questions){

        return view('quizz')->with('questions', $questions);
    }


public function create(){


    return view('add_question');
}




public function save(Request $request){
        request()->validate([
            'question' => 'required',
            'right_answer' => 'required',
            'wrong_answer' => 'required',
        ]);
        $task=new Questions($request->all());
        $task->save();
        return redirect()->back();


    }


public function result(Request $request){
    $result = Input::get('result');
    return $result;
}
};
