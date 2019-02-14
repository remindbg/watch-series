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

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@include('static.footer')