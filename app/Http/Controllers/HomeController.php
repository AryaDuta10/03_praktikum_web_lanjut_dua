<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public static function index(){
        return view('home', ['homes' => Home::Homes()]);
    }
}