<?php

namespace App\Http\Controllers;

use App\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{


    public function single($id) {
        $serie = Series::with('seasons')->find($id);
        $serie->views +=1;
        $serie->save();

        return view('series.single',compact('serie'));

    }
    public function latest()
    {
        $series = Series::with('seasons')->get();

        return view('series.latest',compact('series'));
    }

    public function  popular() {
        $series = Series::with('seasons')->orderBy('views')->get();
    }


}
