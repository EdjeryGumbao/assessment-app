<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
use App\Models\question_sets;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DataController extends Controller
{
    public function storeQuestion(Request $request){
        $questions = new questions;

        $questions->set_name = $request->input('set_name');
        $questions->question = $request->input('question');

        $questions->save();

        $set_name = $request->input('set_name');

        $questions = questions::where('set_name', $set_name)->get();
        
        return view('questionnaires/setquestion', compact('questions', 'set_name'));
    }
    
    public function home(){
        $question_sets = question_sets::select('set_name')->distinct()->get();
        return view('dashboard', ['question_sets' => $question_sets]);
    }

    public function displaySet(Request $request, $set_name = null){
        if ($set_name == null) {
            $set_name = $request->input('set_name');
        }
        $questions = questions::where('set_name', $set_name)->get();
        return view('questionnaires/setquestion', compact('questions', 'set_name'));
    }

    public function previewSet(Request $request, $set_name = null){
        if ($set_name == null) {
            $set_name = $request->input('set_name');
        }
        $questions = questions::where('set_name', $set_name)->get();
        return view('questionnaires/previewset', compact('questions', 'set_name'));
    }
    

    public function createSet(Request $request){
        $set_name = $request->input('set_name');

        $existingSet = question_sets::where('set_name', $set_name)->first();

        if ($existingSet) {
            return back()
                ->withErrors(['set_name' => 'The set name already exists.'])
                ->withInput()
                ->with('error', 'The set name already exists.');
        }

        $question_sets = new question_sets;
        $question_sets->set_name = $set_name;
        $question_sets->save();

        $questions = "";
        return view('questionnaires/setquestion', compact('questions', 'set_name'));
    }


    public function deleteSet(Request $request) {
        $set_name = $request->input('set_name');
        $question_sets = question_sets::where('set_name', $set_name)->first();
    
        if ($question_sets) {
            $question_sets->delete();
            // Delete all rows from the other table with the same set_name
            questions::where('set_name', $set_name)->delete();
            return redirect('/dashboard')->with('success', 'Table ' . $set_name . ' has been deleted.');
        } else {
            return redirect('/')->with('error', 'Table not found.');
        }
    }

    public function deleteQuestion(Request $request) {
        $question = $request->input('question');
        $questions = questions::where('question', $question)->first();
        $set_name = $questions->set_name;
        if ($questions) {
            $questions->delete();
            return $this->displaySet($request, $set_name)->with('success', 'Question deleted successfully.');
        } else {
            return $this->displaySet($request, $set_name)->with('error', 'Question not found.');
        }
    }

    
    public function editQuestion(Request $request){
        $question = $request->input('question');
        $newQuestion = $request->input('new_question');

        $questions = questions::where('question', $question)->first();
        $set_name = $questions->set_name;  
    
        if ($questions) {
            $questions->question = $newQuestion;
            $questions->save();
            return $this->displaySet($request, $set_name)->with('success', 'Question updated successfully.');
        } else {
            return $this->displaySet($request, $set_name)->with('error', 'Question not found.');
        }
    }
    
}