<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
    public static function index(){
        return view('about', ['Abouts' => About::Abouts()]);
    }
}
