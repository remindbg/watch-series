@extends('layouts.app')

@section('content')

        <section id="home-main">
                    <div class="video-content">
                        <h2 class="title main-head-title">Welcome</h2>
                        <p>Here you can find episodes and series of Your favorite shows. Our goal is to keep the website ad-free without annoying and disruptive ads / popups. The concept is simple - everyone can register and post different links for each episode. This way you can find your favorite show in a multiple websites. Unfortunately some external websites that actually holds the episodes might have ads - We cant control that, but We are trying to provide the best possible episode links, that contain little to none ads.
                        </p>
                    </div>
                    <div id="tabs" class="container-fluid featured-bg">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <!-- BOOTSTRAP TABS -->
                                <div class="head-section">
                                    <ul class="nav nav-tabs text-center">
                                        <li class="active">
                                            <a data-toggle="tab" href="#tab1">
                                                <h2 class="title">latest</h2>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab3">
                                                <h2 class="title">most viewed</h2>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row auto-clear">
                                    <div class="tab-content">
                                        <div id="tab1" class="tab-pane fade in active">
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="" src="nakafe.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">Game Of Thrones</a>
                                                    </h4>
                                                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                                                    <div class="ratings">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div id="tab3" class="tab-pane fade">
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="" src="nakafe.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">Game Of Thrones</a>
                                                    </h4>
                                                    <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                                                    <div class="ratings">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="/latest" class="btn au-btn--green">View All Latest</a>
                                    <a href="/popular" class="btn au-btn--green">View All Popular</a>
                                    <a href="/series" class="btn au-btn--green">View All [A-Z]</a>
                                </div>
                                <hr>
                                <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>Random Series</h2>
                                <div class="row auto-clear">
                                    <article class="col-lg-2 col-md-6 col-sm-4">
                                        <!-- POST L size -->
                                        <div class="post post-medium">
                                            <div class="thumbr">
                                                <a class="afterglow post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                    <img class="img-responsive" src="nakafe.jpg" alt="#">
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <h4>
                                                    <a class="title" href="#">Video Lightbox Test</a>
                                                </h4>
                                                <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                                                <div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-half"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="clearfix spacer"></div>
                            </div>
                        </div>
                    </div>

        </section>



@endsection
