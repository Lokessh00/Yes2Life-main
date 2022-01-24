<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exercise;
use App\Workout;
use App\Day;
use Auth;

class WorkoutsController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['create', 'edit', 'update', 'store']);
    }

    public function create() {
        return view('workouts.workouts');
    }

    public function store(Request $request) {
        $request->validate([
            "day" => 'required',
            "exercise" =>'required',
            "intensity" =>'required',
            "duration" =>'required',
            "cal" =>'required'
        ]);
        
        $workout = Workout::create([
            'day_id'=>$request->day,
            'exercise_id'=>$request->exercise,
            'intensity'=> $request->intensity,
            'duration'=>$request->duration,
            'calorie'=>$request->cal,
            'user_id' => Auth::id()
        ]);

        return redirect('/workouts')->with('success', 'New goal has been added');
    }

    public function index() {
        $user = Auth::user();
        $exercise = Exercise::all();
        $workouts = $user->workouts;
        $day = $user->days;

        return view('workouts.workouts', compact('exercise', 'workouts', 'day'));
    }

    public function show($id) {
        $workout = Workout::find($id);

        return view('workouts.show', compact('workout'));
    }

    public function edit($id) {
        $user = Auth::user();
        $workouts = $user->workouts;
        $workout = Workout::find($id);
        $exercise = Exercise::all();
        $day = $user->days;

        return view('workouts.edit', compact('workouts', 'workout', 'exercise','day'));
    }

    public function update($id, Request $request) {
        $request->validate([
            "day" => 'required',
            "exercise" => 'required',
            "intensity" =>'required',
            "duration" =>'required',
            "cal" =>'required'
        ]);

        $update = Workout::where('id', $id)->update([
            'day_id' => $request['day'],
            'exercise_id' => $request['exercise'],
            'intensity' => $request['intensity'],
            'duration' => $request['duration'],
            'calorie' => $request['cal']
        ]);
        return redirect('/workouts')->with('success', 'Update Successful.');
    }

    public function destroy($id) {
        Workout::destroy($id);
        
        return redirect('/workouts')->with('success', 'Exercise has been deleted.');
    }

}
