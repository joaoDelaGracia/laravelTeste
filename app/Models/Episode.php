<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $number
 * @property int $season_id
 * @property int $watched
 * @property-read \App\Models\Season $season
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereSeasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereWatched($value)
 * @mixin \Eloquent
 * @mixin IdeHelperEpisode
 */
class Episode extends Model
{

    protected $fillable = ['number', 'watched'];

    public $timestamps = false;

    public function season(){

        return $this->belongsTo(Season::class);

    }



}
