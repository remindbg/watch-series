<?php

namespace App\Http\Controllers;

use App\Season;
use App\Series;
use Illuminate\Http\Request;

class SeasonController extends Controller
{

    public function single($series_id,$season_id,$slug,$season_num)
    {
        $serie = Series::find($series_id);
        $seasons = Season::with('episodes.links')->find($season_id);
        return view('seasons.single',compact('serie','seasons'));
    }


}
