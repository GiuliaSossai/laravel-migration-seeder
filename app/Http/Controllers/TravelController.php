<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index(){
        $travels = Travel::all();

        return view('travel', compact('travels'));
    }
}
