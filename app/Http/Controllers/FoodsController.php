<?php

namespace App\Http\Controllers;

use DB;
use App\Day;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FoodsController extends Controller
{
    public function create()
    {
        return view('foods.foods');
    }

    public function store(Request $request) {
        
        $request->validate([
            "eating_time" => 'required',
            "food" => 'required',
            "cal" => 'required',
            "day" => 'required'
        ]);
        //$query = DB::table('foods')->insert([
        //    "eating_time" =>$request["eating_time"],
        //    "food" =>$request["food"],
        //    "calorie" =>$request["cal"],
        //    "created_at" => date('Y-m-d H:i:s'),
        //    "updated_at" => date('Y-m-d H:i:s')
        //]);

        $food = Food::create([
            'day_id' => $request['day'],
            'eating_time' => $request['eating_time'],
            'food' => $request['food'],
            'calorie' => $request['cal'],
            'user_id' => Auth::id()
        ]);

        return redirect('/foods')->with('success', 'New food has been added');
    }

    public function index() {
        //$foods = DB::table('foods')->get();
        $user = Auth::user();
        $foods = $user->foods;
        //$foods = Food::all();
        $day = $user->days;

        return view('foods.foods', compact('foods', 'day'));
    }

    public function show($id) {
        //$food = DB::table('foods')->where('id', $id)->first();
        $food = Food::find($id);

        return view('foods.show', compact('food'));
    }

    public function edit($id) {
        $user = Auth::user();
        $foods = $user->foods;
        $food = Food::find($id);
        $day = $user->days;

        return view('foods.edit', compact('foods', 'food', 'day'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            "day" => 'required',
            "eating_time" => 'required',
            "food" => 'required',
            "cal" => 'required'
        ]);

       //$query = DB::table('foods')
       //            ->where('id', $id)
       //            ->update([
       //                'eating_time' => $request['eating_time'],
       //                'food' => $request['food'],
       //                'calorie' => $request['cal']
       //            ]);

       $update = Food::where('id', $id)->update([
        'day_id' => $request['day'],
        'eating_time' => $request['eating_time'],
        'food' => $request['food'],
        'calorie' => $request['cal']
       ]);

        return redirect('/foods')->with('success', 'Update Successful.');
    }

    public function destroy($id) {
        //$query = DB::table('foods')->where('id', $id)->delete();
        Food::destroy($id);

        return redirect('/foods')->with('success', 'Food has been deleted.');
    }
}
