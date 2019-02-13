<?php

namespace App\Http\Controllers\admin;

use App\Episode;
use App\Season;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EpisodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $season = Season::with('episodes')->find($id);



        return view('admin.episodes.index',compact('season'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $season = Season::find($id);

        return view('admin.episodes.create',compact('season'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $episode = new Episode();
        $episode->title = $request['title'];
        $episode->number = $request['number'];
        $episode->season_id = $id;
        $series_id = Season::find($id);
        $episode->series_id = $series_id->series->id;
        $episode->save();
        return redirect()->route('episode.index',$id)->with('message','Added New Episdoe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $episode = Episode::find($id);
        return view('admin.episodes.edit',compact('episode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $episode = Episode::find($id);
        $episode->title = $request['title'];
        $episode->number = $request['number'];
        $episode->save();
        return redirect()->route('episode.index',$id)->with('message','Edited!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode = Episode::find($id);
        Episode::destroy($id);
        return redirect()->route('episode.index',$episode->season_id)->with('message','deleted!');
    }
}
