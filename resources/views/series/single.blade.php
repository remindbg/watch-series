@extends('layouts.new')

@section('title','Watch Free: ' . $serie->title)




@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 category-video-grid">

        <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>{{$serie->title}}</h2>
        <!-- VIDEO POSTS ROW -->
        <article class="page">

            <div class="page-info">
                <div class="metabox">
                <span class="meta-i">
                    <a href=""><i class="fa fa-television"></i>Seasons: 5</a>
                </span>
                    <span class="meta-i">
                    <a href="#"> <i class="fa fa-file"></i>Episodes Uploaded: 51</a>
                </span>

                    <span class="meta-i">
                    <i class="fa fa-clock-o"></i><a href="#">Last Update: {{$serie->updated_at}}</a>
                </span>
                    <span class="meta-i">
                    <a href="#"> <i class="fa fa-file"></i>Links : 5123</a>
                </span>

                    <span class="meta-i">
                    <i class="fa fa-eye"></i>{{$serie->views}} views
                </span>
                </div>
            </div>
            <div class="clearfix spacer"></div>
            <!-- DETAILS -->
            <div class="video-content">

                <div class="row">
                    <div class="col-lg-3" text-center>
                        <img src="{{asset('nakafe.jpg')}}"
                             class="pull-left gap-right gap-bottom img-responsive"
                             alt="img">
                    </div>
                    <div class="col-lg-9">
                        <p>{{$serie->description}}</p>
                    </div>
                </div>
                <div class="seasons">
                    <h3 class="text-center">Seasons</h3>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Episodes</th>
                            <th scope="col">Links</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($serie->seasons as $season)
                            <tr>
                                <td><a href="{{route('fseason.single',
                            [$serie->id,$season->id,$serie->slug,$season->number]
                            )}}">{{$season->title}}</a></td>
                                <td>234</td>
                                <td>@5123</td>
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

