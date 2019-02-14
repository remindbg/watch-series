<aside class="dark-bg">

    <article>
        <h2 class="icon"><i class="fa fa-gears" aria-hidden="true"></i>Latest Series</h2>
        <ul class="sidebar-links">
            @foreach ($latests as $series)
                <li class="fa fa-television"><a href="/series/{{$series->id}}/{{$series->slug}}">{{$series->title}}</a></li>
            @endforeach

        </ul>
    </article>

</aside>