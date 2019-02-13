<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Muvee Reviews - Video Magazine Bootstrap HTML5 template Framework 1.0">
    <meta name="author" content="OrcasThemes">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link rel="icon" type="image/png" href="" />
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="
            @if(Cookie::get('theme'))
        {{asset('css/'. Cookie::get('theme'))}}@else{{asset('css/orange.css')}}
            @endif">
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{asset('css/fontello-ie7.css')}}">
    <![endif]-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="{{asset('css/ie.css')}}" type="text/css" media="screen, projection">
    <![endif]-->
    <link href="{{asset('css/lity.css')}}" rel="stylesheet">
   @yield('css')
</head>
<body>
<div id="home1" class="container-fluid standard-bg">
    <div class="row header-top">
        <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
            <a class="main-logo" href="#"><img src="" class="main-logo img-responsive" alt="watch-series.info" title="watch-series.info"></a>
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
                                <li><a href="/latest">Latest </a></li>
                                <li><a href="/popular">Popular</a></li>
                                <li><a href="/series">All (a-z) Series</a></li>
                                <li><a href="/episodes-feed">Latest Episodes</a></li>
                            </ul>
                        </li>

                        <li><a href="/links-feed">Links Feed</a></li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Change Theme <span class="fa fa-chevron-down pull-right"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('themepicker','orange')}}">Orange</a></li>
                                <li><a href="{{route('themepicker','pink')}}">Pink</a></li>
                                <li><a href="{{route('themepicker','blue')}}">Blue</a></li>
                                <li><a href="{{route('themepicker','aqua')}}">Aqua</a></li>
                            </ul>
                        </li>
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