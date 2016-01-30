<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function home(){

        return view('main.index');
    }

    public function home2(){

        return view('main.index2');
    }

    public function brainTest(){

        return view('main.aptitudetest');
    }
}
