<?php

namespace App\Repositories;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Support\Facades\DB;
use App\Repositories\EpisodesRepository;

class EloquentEpisodesRepository implements EpisodesRepository
{
    public function watched($watchedEpisodes, Season $season): void{
        $episodesNotWatched = [];
        foreach($season->episodes as $episode){
            if(!in_array($episode->id, $watchedEpisodes)){
                $episodesNotWatched[] = $episode->id;
            }
        }
        DB::transaction( function () use ($watchedEpisodes, $episodesNotWatched) {
            Episode::whereIn("id", $watchedEpisodes)->update(["watched" => true]);
            Episode::whereIn("id", $episodesNotWatched)->update(["watched" => false]);
        });
    }
}

