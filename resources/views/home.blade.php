@extends('layouts.app')

@section('content')
    <div class="col-lg-2 col-md-4 hidden-sm hidden-xs">
        <aside class="dark-bg">
            <article>
                <h2 class="icon"><i class="fa fa-flash" aria-hidden="true"></i>Popular</h2>
                <p>Trending Series Last Month</p>
                <ul class="sidebar-links">
                    <li class="fa fa-chevron-right"><a href="#">featured videos</a><span>4.000</span></li>
                    <li class="fa fa-chevron-right"><a href="#">most viewed</a><span>2.000</span></li>
                    <li class="fa fa-chevron-right"><a href="#">editor's choice</a><span>650</span></li>
                    <li class="fa fa-chevron-right"><a href="#">all video</a><span>4.000</span></li>
                    <li class="fa fa-chevron-right"><a href="#">full hd</a><span>7.800</span></li>
                    <li class="fa fa-chevron-right"><a href="#">premium</a><span>200</span></li>
                    <li class="fa fa-chevron-right"><a href="#">movies</a><span>15</span></li>
                </ul>
            </article>
            <div class="clearfix spacer"></div>
            <article>
                <h2 class="icon"><i class="fa fa-gears" aria-hidden="true"></i>Categories</h2>
                <ul class="sidebar-links">
                    <li class="fa fa-chevron-right"><a href="#">Lifestyle</a><span>4.000</span></li>
                    <li class="fa fa-chevron-right"><a href="#">World News</a><span>2.000</span></li>
                    <li class="fa fa-chevron-right"><a href="#">Funny videos</a><span>650</span></li>
                    <li class="fa fa-chevron-right"><a href="#">Hot Stories</a><span>4.000</span></li>
                    <li class="fa fa-chevron-right"><a href="#">Music Clips</a><span>7.800</span></li>
                    <li class="fa fa-chevron-right"><a href="#">Premier Trailers</a><span>200</span></li>
                </ul>
            </article>
            <div class="clearfix spacer"></div>
        </aside>
    </div>
    <!-- HOME MAIN POSTS -->
    <div class="col-lg-10 col-md-8">
        <div class="col-lg-9">
            <div class="video-content">
                <h2 class="title main-head-title">Welcome</h2>
                <hr>
                <p>Here you can find episodes and series of Your favorite shows. Our goal is to keep the website ad-free without annoying and disruptive ads / popups. The concept is simple - everyone can register and post different links for each episode. This way you can find your favorite show in a multiple websites. Unfortunately some external websites that actually holds the episodes might have ads - We cant control that, but We are trying to provide the best possible episode links, that contain little to none ads.
                </p>
            </div>
        </div>
        <section id="home-main">
            <div class="row">
                <!-- ARTICLES -->
                <div class="col-lg-9 col-md-12 col-sm-12">

                    <div id="tabs" class="container-fluid featured-bg">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <section id="posts">
                                    <div id="posts-carousel" class="carousel slide" data-ride="carousel">
                                        <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>Trending</h2>
                                        <a href="/trending/"><span>- View All</span></a>
                                        <div class="carousel-control-box">
                                            <a class="left carousel-control" href="#posts-carousel" role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                            <a class="right carousel-control" href="#posts-carousel" role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item">
                                                <div class="row auto-clear">
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s2.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s3.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s4.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                            <div class="item active">
                                                <div class="row auto-clear">
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s2.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s3.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                                    <article class="col-lg-3 col-md-3 col-sm-6 post post-medium">
                                                        <div class="thumbr">
                                                            <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity="">
                                                                <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                                <img class="img-responsive" src="img/thumbs/thumb-s4.jpg" alt="#">
                                                            </a>
                                                        </div>
                                                        <div class="infor">
                                                            <h4>
                                                                <a class="title" href="#">You play Call of Duty? That’s cute</a>
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
                                    </div>
                                </section>
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
                                    <!-- TAB CONTENTS -->
                                    <div class="tab-content">
                                        <div id="tab1" class="tab-pane fade in active">
                                            <!-- POST L size -->
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss">
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="" src="got.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">I’m not perfect but I am Loyal</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab3.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">When I fell for you, I fell Hard</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab4.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">If you are Mine, You are Mine. I don’t like Sharing</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab5.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">I love you. That’s all I know</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab6.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">It will be Always YOU</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">With You, I forget all my problems. With You, Time Stands Still.</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab2.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">I’m not perfect but I am Loyal</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab3.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">When I fell for you, I fell Hard</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab4.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">If you are Mine, You are Mine. I don’t like Sharing</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="got.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">I love you. That’s all I know</a>
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
                                            <!-- POST L size -->
                                            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
                                                <div class="thumbr">
                                                    <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                        <img class="img-responsive" src="img/thumbs/thumb-tab6.jpg" alt="#">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h4>
                                                        <a class="title" href="#">It will be Always YOU</a>
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
                                <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>popular Series</h2>

                                <div class="row auto-clear">
                                    <article class="col-lg-3 col-md-6 col-sm-4">
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
                                    <article class="col-lg-3 col-md-6 col-sm-4">
                                        <!-- POST L size -->
                                        <div class="post post-medium">
                                            <div class="thumbr">
                                                <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                    <img class="img-responsive" src="got.jpg" style="width: 267px; height: 267px;" alt="#">
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <h4>
                                                    <a class="title" href="#">I graduated from the university of Selfies</a>
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
                                    <article class="col-lg-3 col-md-6 col-sm-4">
                                        <!-- POST L size -->
                                        <div class="post post-medium">
                                            <div class="thumbr">
                                                <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                    <img class="img-responsive" src="img/thumbs/thumb-s3.jpg" alt="#">
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <h4>
                                                    <a class="title" href="#">I don’t always surf the internet, but when I do, Eyebrows</a>
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
                                    <article class="col-lg-3 col-md-6 col-sm-4">
                                        <!-- POST L size -->
                                        <div class="post post-medium">
                                            <div class="thumbr">
                                                <a class="post-thumb" href="https://www.youtube.com/watch?v=Ikkfwnq4Uss" data-lity>
                                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                                    <img class="img-responsive" src="img/thumbs/thumb-s4.jpg" alt="#">
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <h4>
                                                    <a class="title" href="#">A selfie a day keeps the friends away</a>
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

                </div>
                <!-- RIGHT ASIDE -->
                <div class="col-lg-3 hidden-md col-sm-12 text-center top-sidebar">
                    <!-- SUBSCRIBE BOX -->
                    <div class="subscribe-box">
                        <h2 class="icon"><i class="fa fa-plug" aria-hidden="true"></i>Login</h2>
                        <!-- SUBSCRIBE FIELD -->
                        <form name="search-submit" method="post" action="#" id="subscribe-submit">
                            <fieldset class="search-fieldset">
                                <input id="subscribe" type="text" name="search" size="12" class="search-field" placeholder="Your email address" value="">
                                <input id="subscribe" type="password" name="search" size="12" class="search-field" placeholder="Your email address" value="">
                                <input type="checkbox" class="checkbox-inline pull-left"> Remember
                                <button class="subscribe-btn" type="submit" title="Login">Login</button>
                                <hr>
                                <button class="btn btn-sm btn-info" type="submit" title="Register">Register</button>
                            </fieldset>
                        </form>
                    </div>

                    <aside class="dark-bg sidebar">
                        <div class="clearfix spacer"></div>

                        <article>
                            <h2 class="icon"><i class="fa fa-upload" aria-hidden="true"></i>Recent Episodes</h2>

                            <div class="text-left small">
                                <a href="/series">Game Of Thrones</a> -
                                <span class="small">
                                        Season 7
                                    </span>
                                |
                                <span class="small">
                                        Season 7
                                    </span>
                                <p class="small text-right">20 minutes ago</p>
                                <hr>
                            </div>
                        </article>
                        <div class="clearfix spacer"></div>
                    </aside>

                </div>
            </div>
        </section>
    </div>
    </div>
@endsection
