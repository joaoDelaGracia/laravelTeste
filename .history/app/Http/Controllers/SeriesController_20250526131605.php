<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){

        $series = [
            "Punisher",
            "Lost",
            "Grey\'s Anatomy"
        ];

        return view('series.index', compact('series'));

    }

    public function create(Request $request){
        return view("series.create");
    }

    public function store(Request $request){
        $nome = $request->input("nome");



    }

}
