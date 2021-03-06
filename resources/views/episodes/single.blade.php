@extends('layouts.new')

@section('title','Watch Free: ' . $serie->title . ' Episode: ' . $episodes->number)


@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 category-video-grid">

        <!-- VIDEO POSTS ROW -->
        <article class="page">

            <div class="clearfix spacer"></div>
            <!-- DETAILS -->
            <div class="video-content">
                <h2 class="title main-head-title">Watch Free : {{$serie->title}} - {{$season->title}} {{$episodes->title}}</h2>

                <div class="seasons">
                    <h3 class="text-center">Links</h3>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">Url</th>
                            <th scope="col">domain </th>
                            <th scope="col">Views</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($episodes->links as $link)
                            <tr>
                                <td><a href="{{$link->url}}" target="_blank">{{$link->domain}}</a></td>
                                <td><a href="{{$link->url}}"></a>{{$link->url}}</td>
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

