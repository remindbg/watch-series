<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Season;
use App\Series;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
   public function single($series_id,$season_id,$slug,$season_num,$episode_id,$episode_number) {
       $season = Season::find($season_id);
       $serie = Series::find($series_id);
       $episodes = Episode::with('links')->find($episode_id);
       return view('episodes.single',compact('serie','episodes','season'));
   }
}
