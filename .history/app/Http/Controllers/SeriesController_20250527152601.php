<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){

        $series = Serie::query()->orderBy("nome")->get();

        $mensagemSucesso = $request->session()->get("mensagem.sucesso");

        return view('series.index')->with('series', $series)
        ->with('mensagemSucesso', $mensagemSucesso);

    }

    public function create(){

        return view("series.create");
    }


    public function store(Request $request){

        $serie = Serie::create($request->all());
        $request->session()->flash("mensagem.sucesso","Série '$serie->nome' adicionada com sucesso !");

        return to_route('series.index');

    }

    public function destroy(int $series){
        $serie = Serie::find($->series);
        Serie::destroy($request->series);
        $request->session()->flash("mensagem.sucesso", "Série removida com sucesso !");

        return to_route('series.index');
    }

}
