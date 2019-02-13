<div class="col-lg-2 col-md-4 hidden-sm hidden-xs">


    <aside class="dark-bg">

        <article>
            <h2 class="icon"><i class="fa fa-flash" aria-hidden="true"></i>Popular</h2>
            <p>Trending Series</p>
            <ul class="sidebar-links small">
                @foreach ($populars as $series)
                    <li class="fa fa-television"><a href="/series/{{$series->id}}/{{$series->slug}}">{{$series->title}}</a></li>
                @endforeach
            </ul>
        </article>

        <div class="clearfix spacer"></div>
    </aside>
</div>