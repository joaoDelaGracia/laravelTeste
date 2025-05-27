<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){


        $series = Serie::query()->orderBy("nome")->get();
>>>>>>> ca29d7cbf21624a7bf8fc43471d86a007f2726c1

        return view('series.index', compact('series'));

    }

    public function create(){
        return view("series.create");
    }

<<<<<<< HEAD

    public function store(Request $request){

        $nomeSerie = $request->input("nome");
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
=======
    public function store(Request $request){

        Serie::create($request->all());

        return to_route('series.index');

>>>>>>> ca29d7cbf21624a7bf8fc43471d86a007f2726c1
    }

}
