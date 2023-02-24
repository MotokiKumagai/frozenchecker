<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index(Item $item)
    {
        return view('frozencheckers/index')->with(['items' => Auth::user()->items()->get()]);  
    }
}
