<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Season;
use App\Models\Series;

interface EpisodesRepository
{
    public function watched($watchedEpisodes, Season $season): void;
}

