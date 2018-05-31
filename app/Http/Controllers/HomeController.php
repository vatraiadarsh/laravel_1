<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index',[
           'name'=>' Adarsh Bhattarai',
           'colors'=>[
            'Red','Blue','Green','Yellow','Pink'
           ]

        ]);
    }
}
