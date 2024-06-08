<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function createQuestion(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'message' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);
        
        $incomingFields['name'] = $incomingFields['name'];
        $incomingFields['firstname'] = $incomingFields['firstname'];
        $incomingFields['message'] = $incomingFields['message'];
        $incomingFields['email'] = $incomingFields['email'];
        $incomingFields['number'] = $incomingFields['number'];
        
        Question::create($incomingFields);
    
        return redirect('/');
    }

    public function showQuestions()
    {
        $questions = Question::all();
        return view('vragen', ['questions' => $questions]);
    }
    
    public function deleteQuestion(Request $request){
        $id =$request->input('id');
        $question = Question::find($id);

        if($question)
        {
            $question->delete();
            return redirect('/')->with('success','Succesvol verwijderd'); 
        } else
        {
            return redirect('/')->with('error','Probleem met het verwijderen, probeer opnieuw');
        }
    }

}
