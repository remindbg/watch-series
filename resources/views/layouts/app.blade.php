@include('static.header')
    <!-- todo: Remind to future me : plz fix that mess when the site get some visitors -->
    <div class="row">
    @include('static.defleftsidebar')
        <div class="col-lg-7 col-md-8">
             @yield('content')
        </div>
        @include('static.rightsidebar')
    </div>

@include('static.footer')