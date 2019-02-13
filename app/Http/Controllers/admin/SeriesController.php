<?php

namespace App\Http\Controllers\admin;

use App\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Series $series)

    {
        $allseries = Series::all()->sortByDesc('created_at');
        return view('admin.series.index',compact('allseries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $series = new Series($request->all());
        $series->save();
        return redirect()->route('series.index')->with('message','added new series');
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
        $series = Series::find($id);

        return view('admin.series.edit',compact('series'));
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
        $series = Series::find($id);
        $series->title = $request['title'];
        $series->slug = $request['slug'];
        $series->description = $request['description'];
        $series->isactive = $request['isactive'];
        $series->image = $request['image'];
        $series->save();
        return redirect()->route('series.index')->with('message','edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Series::find($id);
        $serie->delete($serie);
        return redirect()->route('series.index')->with('message','Removed!');

    }
}
