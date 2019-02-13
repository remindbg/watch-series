@include('static.header')
<!-- todo: Remind to future me : plz fix that mess when the site get some visitors -->
<div class="row">
    <div class="col-lg-10 col-md-8">
        <section id="category">
            <div class="row auto-clear">
                <!-- RELATED VIDEOS -->
              @yield('content')
            </div>

        </section>
    </div>
    <div class="col-lg-2 col-md-4 hidden-sm hidden-xs">
        @include('static.rightsidebar')
    </div>
</div>
<hr>
<div id="channels-block" class="container-fluid channels-bg">
    <div class="container-fluid ">
        <div class="col-md-12">
            <!-- CHANNELS -->
            <section id="channels">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>Random Series</h2>
                    <div class="carousel-control-box">
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row auto-clear">
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Fancy Channel Name</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Premium MakeUp Beauty Channel</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Private Golden CH</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">4K Quality Videos</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Japan Couture Video</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Burlesque French Movies</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row auto-clear">
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Fancy Channel Name</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Premium MakeUp Beauty Channel</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Private Golden CH</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">4K Quality Videos</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Japan Couture Video</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-lg-2 col-md-4 col-sm-4">
                                    <div class="post post-medium">
                                        <div class="thumbr">
                                            <a class="post-thumb" href="#">
                                                <img class="img-responsive" src="img/channels/ch-1.jpg" alt="#">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h4>
                                                <a class="title" href="#">Burlesque French Movies</a>
                                            </h4>
                                            <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@include('static.footer')