<?php

namespace App\Http\Controllers\admin;

use App\Episode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Link;
class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $episode = Episode::with('links')->find($id);

        return view('admin.links.index',compact('episode'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $episode = Episode::find($id);
        return view('admin.links.create',compact('episode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $link = new Link();
        $link->url = $request['url'];
        $link->domain = $request['domain'];
        $link->isactive = $request['isactive'];
        $link->episode_id = $id;
        $link->save();
        return redirect()->route('link.index',$id)->with('message','link added');
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
        $link = Link::with('episode')->find($id);
        return view('admin.links.edit',compact('link'));
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
        $link = Link::find($id);
        $link->url = $request['url'];
        $link->domain = $request['domain'];
        $link->isactive = $request['isactive'];
        $link->save();
        return redirect()->route('link.index',$link->episode_id)->with('message','link updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        Link::destroy($id);
        return redirect()->route('link.index',$link->episode_id)->with('message','Link Removed');
    }
}
