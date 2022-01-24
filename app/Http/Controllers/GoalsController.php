<?php

namespace App\Http\Controllers;

use DB;
use App\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GoalsController extends Controller
{
    public function create() {
        return view('goals.goals');
    }

    public function store(Request $request) {
        $request->validate([
            "cal" =>'required',
            "cal_min" =>'required',
            "weight" =>'required'
        ]);

        $goal = Goal::create([
            "goal_projection" =>$request["goal_time"],
            "calorie_budget" =>$request["cal"],
            "minimum_calorie" =>$request["cal_min"],
            "weight_goals" =>$request["weight"],
            "user_id"=>Auth::id()
        ]);

        return redirect('/goals')->with('success', 'New goal has been added');
    }

    public function index() {
        $goals = Goal::all();

        return view('goals.goals', compact('goals'));
    }

    public function show($id) {
        $goal = Goal::find($id);

        return view('goals.show', compact('goal'));
    }

    public function edit($id) {
        $goals = Goal::all();
        $goal = Goal::find($id);

        return view('goals.edit', compact('goals', 'goal'));
    }

    public function update($id, Request $request) {
        $request->validate([
            "goal_time" => 'required',
            "cal" =>'required',
            "cal_min" =>'required',
            "weight" =>'required'
        ]);

        $update = Goal::where('id', $id)->update([
            'goal_projection' => $request['goal_time'],
            'calorie_budget' => $request['cal'],
            'minimum_calorie' => $request['cal_min'],
            'weight_goals' => $request['weight']
        ]);
        return redirect('/goals')->with('success', 'Update Successful.');
    }

    public function destroy($id) {
        Goal::destroy($id);
        
        return redirect('/goals')->with('success', 'Goals has been deleted.');
    }
}