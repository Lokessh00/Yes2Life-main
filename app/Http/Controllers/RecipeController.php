<?php

namespace App\Http\Controllers;


use App\bmi;
use App\Recipe2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    //
    public function recipe(){
        return view("recipe");
    }

    public function index() {
        $recipe = Recipe2::all();

        return view("recipe", compact('recipe'));
    }

    public function suggest() {
        $suggestion = Recipe2::all()->random(4);
        
        return view("suggestions.underweight", compact('suggestion'));
    }

    public function suggest2() {
        $suggestion = Recipe2::all()->random(4);
        
        return view("suggestions.normal", compact('suggestion'));
    }

    public function suggest3() {
        $suggestion = Recipe2::all()->random(4);
        
        return view("suggestions.overweight", compact('suggestion'));
    }

    public function single_recipe($id){
        $srecipe = Recipe2::find($id);

        return view("single-recipe", compact('srecipe'));
    }

    public function create(){
        return view('crudrecipe.inputrecipe');
    }

    public function store(Request $request){

        $data= new Recipe2();
        $data->name = $request->input('name');
        $data->description= $request->input('description');
        $data->steps= $request->input('steps');
        $data->prep_time= $request->input('prep_time');
        $data->cook_time= $request->input('cook_time');
        $data->serving= $request->input('serving');
        $data->ingredients= $request->input('ingredients');
        $data->tools= $request->input('tools');
 
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->back()->with('status','Image Added');
    }
}
