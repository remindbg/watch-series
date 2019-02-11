</div>
<div id="footer" class="container-fluid footer-background">
    <div class="container">
        <footer>
            <!-- SECTION FOOTER -->
            <div class="row copyright-bottom text-center">
                <div class="col-md-12 text-center">
                    <p>&copy; Copyright 2019. All Rights Reserved. watch-series.info</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- JAVA SCRIPT -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{asset('js/lity.js')}}"></script>
<script>
    $(".nav .dropdown").hover(function() {
        $(this).find(".dropdown-toggle").dropdown("toggle");
    });
</script>
<!-- MODAL -->
<div id="enquirypopup" class="modal fade in " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content row">
            <div class="modal-header custom-modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>free access</h2>
            </div>
            <div class="modal-body">
                <form name="info_form" class="form-inline" action="#" method="post">
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-sm-12">
                        <button class="subscribe-btn pull-right" type="submit" title="Subscribe">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>