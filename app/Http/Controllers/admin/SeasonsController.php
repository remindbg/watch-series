<?php

namespace App\Http\Controllers\admin;

use App\Season;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Series;
class SeasonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $series = Series::all()->find($id);
        return view('admin.seasons.index',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $series = Series::find($id);


        return view('admin.seasons.create',compact('series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $season = new Season();
        $season->title = $request['title'];
        $season->number = $request['number'];
        $season->series_id = $id;
        $season->save();
        return redirect()->route('season.index',$id)->with('message','Added new Season');
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
        $season = Season::find($id);
        return view('admin.seasons.edit',compact('season'));
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
        $season = Season::find($id);
        $season->title = $request['title'];
        $season->number = $request['number'];
        $season->save();
        return redirect()->route('season.index',$season->series_id)->with('message','Edited!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::find($id);
       Season::destroy($id);
        return redirect()->route('season.index',$season->series_id)->with('message','deleted!');
    }
}
