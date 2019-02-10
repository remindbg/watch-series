<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Muvee Reviews - Video Magazine Bootstrap HTML5 template Framework 1.0">
    <meta name="author" content="OrcasThemes">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title>Watch Free Series and TV Shows - no ads</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/screen.css')}}">
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{asset('css/fontello-ie7.css')}}">
    <![endif]-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="{{asset('css/ie.css')}}" type="text/css" media="screen, projection">
    <![endif]-->
    <link href="{{asset('css/lity.css')}}" rel="stylesheet">
    <style>


    </style>
</head>
<body>
<!-- HOME 1 -->
<div id="home1" class="container-fluid standard-bg">
    <!-- HEADER -->
    <div class="row header-top">
        <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
            <a class="main-logo" href="#"><img src="img/main-logo.png" class="main-logo img-responsive" alt="Muvee Reviews" title="Muvee Reviews"></a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-7 hidden-xs pull-right">
            <div class="right-box">
                @guest()
                    <button type="button" class="access-btn" data-toggle="modal" data-target="#enquirypopup">Register</button>
                @elseguest()
                    <button type="button" class="access-btn" data-toggle="modal" data-target="#enquirypopup">Profile</button>
                @endguest

            </div>
        </div>
    </div>
    <!-- MENU -->
    <div class="row home-mega-menu ">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse megabg dropshd ">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TV Series <span class="fa fa-chevron-down pull-right"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="single-video.html">Latest Series</a></li>
                                <li><a href="single-video-fullwidth.html">Popular</a></li>
                                <li><a href="single-video-right-sidebar.html">All (a-z) Series</a></li>
                                <li><a href="single-post-fullwidth.html">Latest Episodes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TV Shows <span class="fa fa-chevron-down pull-right"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="single-video.html">Latest TV Shows</a></li>
                                <li><a href="single-video-fullwidth.html">Popular</a></li>
                                <li><a href="single-video-right-sidebar.html">All (a-z) TV Shows</a></li>
                                <li><a href="single-post-fullwidth.html">Latest Episodes</a></li>
                            </ul>
                        </li>

                        <li><a href="/latest">All Latest</a></li>
                        <li><a href="/contact">Contact</a></li>

                    </ul>
                    <div class="search-block">
                        <form>
                            <input type="search" placeholder="Search">
                        </form>
                    </div>
                </div>
                <!-- /.nav-collapse -->
            </nav>
        </div>
    </div>