<?php

namespace App\Http\Controllers;

use App\Events\SeriesCreated;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use App\Models\User;
use App\Repositories\SeriesRepository;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SeriesController extends Controller
{

    public function __construct(private SeriesRepository $repository){
        /** @noinspection PhpUndefinedMethodInspection */
        $this->middleware('auth')->only('edit');
    }

    public function index(Request $request){

        $series = Series::all();

        $mensagemSucesso = $request->session()->get("mensagem.sucesso");

        return view('series.index')->with('series', $series)
        ->with('mensagemSucesso', $mensagemSucesso);

    }

    public function create(){

        return view("series.create");
    }


    public function store(SeriesFormRequest $request){

        $coverPath = $request->image("cover")
        ->store('series_cover', 'public');

        $request->coverPath = $coverPath;

        $serie = $this->repository->add($request);

        SeriesCreated::dispatch(
            $serie->nome,
            $serie->id,
            $request->seasonsQty,
            $request->episodesPerSeason
        );

        return to_route('series.index')->with("mensagem.sucesso","Série '{$serie->nome}' adicionada com sucesso !");

    }

    public function destroy(Series $series){

        $series->delete();

        return to_route('series.index')->with("mensagem.sucesso", "Série '{$series->nome}' removida com sucesso !");
    }

    public function edit(Series $series) {

        return view("series.edit")->with("serie", $series);
    }

    public function update(Series $series, SeriesFormRequest $request){
        $series->fill($request->all());
        $series->save();

        return to_route("series.index")->with("mensagem.sucesso", "Série '{$series->nome}' atualizada com sucesso !");
    }

}
