<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDF;
use Auth;

class PdfController extends Controller
{
    public function pdf() {
        $food = Auth::user();
        $pdf = PDF::loadView('pdf', ['data' => $food]);
        //return $pdf->download('food.pdf');
        return $pdf->stream();
    }
    
}
