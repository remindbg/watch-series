@extends('layouts.new')

@section('title','Watch Free: ' . $serie->title . ' Season: ' . $seasons->number)
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 category-video-grid">

        <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>>Watch Free : {{$serie->title}} - {{$seasons->title}}</h2>
        <!-- VIDEO POSTS ROW -->
        <article class="page">

            <div class="clearfix spacer"></div>
            <!-- DETAILS -->
            <div class="video-content">

                <div class="seasons">
                    <h3 class="text-center">Episodes</h3>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Links</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($seasons->episodes as $episode)
                            <tr>
                                <td><a href="{{route('fepisode.single',[
                            $serie->id,$seasons->id,$serie->slug,$seasons->number,$episode->id,$episode->number
                            ]
                            )}}">{{$episode->title}}</a></td>
                                <td><a href=""></a>{{$episode->links->count()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>



            </div>
            <div class="clearfix spacer"></div>
        </article>

    </div>
@endsection
