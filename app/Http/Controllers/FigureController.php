<?php

namespace App\Http\Controllers;

use App\Models\Figure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FigureController extends Controller
{
    public function figure(Figure $figure)
    {
        return view('frozencheckers/figure')->with(['figures' => Auth::user()->figure()->get()]);
    }
}
