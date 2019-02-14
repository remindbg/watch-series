@extends('layouts.new')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 category-video-grid">

        <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>Latest Series</h2>
        <!-- VIDEO POSTS ROW -->
        <div class="row">
            @foreach ($series as $serie)
                <article class="col-lg-2 col-md-3 col-sm-3">
                    <!-- POST L size -->
                    <div class="post post-medium">
                        <div class="thumbr">
                            <a class="post-thumb" href="{{route('fseries.single',[$serie->id,$serie->slug])}}">

                                <div class="cactus-note ct-time font-size-1"><span>{{$serie->views}}</span></div>
                                <img class="img-fluid" style="
                                width: 256px;height: 300px;

" src="{{asset($serie->image)}}" alt="{{$serie->title}}">
                            </a>
                        </div>
                        <div class="infor">
                            <h4>
                                <a class="title" href="#">{{$serie->title}}</a>
                            </h4>
                        </div>
                    </div>
                </article>
            @endforeach

        </div>

    </div>
@endsection
@section('title','Watch Free Series and TV Shows - no ads')
