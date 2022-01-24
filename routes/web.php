<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bmiController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\Recipe2Controller;

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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('goals', 'GoalsController')->middleware('auth');
Route::resource('foods', 'FoodsController')->middleware('auth');
Route::resource('workouts', 'WorkoutsController')->middleware('auth');
Route::resource('days', 'DaysController')->middleware('auth');
Route::resource('profile', 'ProfilesController')->middleware('auth');
Route::resource('recipe', 'RecipeController')->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/instruction', function () {
    return view('instruction');
});

Route::get('/video', function () {
    return view('/video');
});

Route::get('/caloriesCalculator', [bmiController::class, 'show']);

Route::post('/caloriesCalculator', [bmiController::class, 'store']);

Route::get('/recipe', [RecipeController::class, 'index']);

Route::get('/underweight', [RecipeController::class, 'suggest']);

Route::get('/normal', [RecipeController::class, 'suggest2']);

Route::get('/overweight', [RecipeController::class, 'suggest3']);

Route::get('/single-recipe/{id}', [RecipeController::class, 'single_recipe'])->name('single-recipe');

Route::get('/inputrecipe', [RecipeController::class,'create']);

Route::post('/inputrecipe', [RecipeController::class, 'store']);

Route::get('/template', function () {
    return view('template');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'DaysController@index')->name('home');

Route::get('/tespdf', function() {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();  
});

Route::get('/instruction', function () {
    return view('instruction');
});
