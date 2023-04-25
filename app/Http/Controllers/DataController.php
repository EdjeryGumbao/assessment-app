<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions;
use App\Models\question_sets;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DataController extends Controller
{
    public function storeData(Request $request){
        $questions = new questions;

        $questions->set_name = $request->input('set_name');
        $questions->question = $request->input('question');

        $questions->save();

        $set_name = $request->input('set_name');

        $questions = questions::where('set_name', $set_name)->get();
        
        return view('questionnaires/setquestion', compact('questions', 'set_name'));
    }

    public function showData(){
        $questions = questions::all();
        return view('questionnaires/setquestion', ['questions' => $questions]);
    }

    public function home(){
        $question_sets = question_sets::select('set_name')->distinct()->get();
        return view('dashboard', ['question_sets' => $question_sets]);
    }

    public function displaySet(Request $request){
        $set_name = $request->input('set_name');

        $questions = questions::where('set_name', $set_name)->get();
        return view('questionnaires/setquestion', compact('questions', 'set_name'));
    }

    public function createTable(Request $request){
        $question_sets = new question_sets;
        $set_name = $request->input('set_name');

        $question_sets = question_sets::where('set_name', $set_name)->first();

        if ($question_sets) {
            return back()->withErrors(['set_name' => 'The set name already exists.'])->withInput()->with('error', 'The set name already exists.');
        }
        else {
        $question_sets->set_name = $set_name;

        $question_sets->save();

        $set_name = $request->input('set_name');
        $questions = "";
        
        return view('questionnaires/setquestion', compact('questions', 'set_name'));
        }
    }
    
}