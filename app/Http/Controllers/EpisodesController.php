<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use App\Repositories\EloquentEpisodesRepository;
use App\Repositories\EpisodesRepository;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{

    public function __construct(private EpisodesRepository $repository) {

    }

    public function index(Season $season){

        return view("episodes.index", ['episodes' => $season->episodes]);
    }

    public function update(Season $season, Request $request){


        $this->repository->watched($request->episodes, $season);


        return to_route('episodes.index', $season->id);
    }

}
