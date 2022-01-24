<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bmi;
use resources\views\caloriesCalculator;

class bmiController extends Controller
{
    //
    public function show(){
        return view('/caloriesCalculator');
    }

    public function store(Request $request){
        $data = new bmi();
        $data->bmi = $request->input('bmi');
        $data->save();  

        if($data->bmi < 18.0){
            return redirect('/underweight')->with('status');
        }
        else if($data->bmi <25 && $data->bmi >18){
            return redirect('/normal')->with('status');
        }
        else{
            return redirect('/overweight')->with('status');
        }   
    }

    public function index(){
        $data= bmi::all();

        return view("caloriesCalculator", compact('data'));
    }
}
