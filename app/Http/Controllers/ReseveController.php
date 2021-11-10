<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;

class ReseveController extends Controller
{
    public function index(Request $request){
        $items = Reserve::all();
        return view('reserve.index',['items' => $items]);
    }
}
