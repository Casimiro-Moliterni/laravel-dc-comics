<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class PageController extends Controller
{
    //p
    public function index(){
        return view('home');
    }
}
