<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Welcome | RainForest Sch</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
    <link  rel="stylesheet" href="css/font-awesome.min.css">
    <link  rel="stylesheet" href="css/app.css">
    <link rel="icon" type="image/png" href="./images/ad.jpg" width="40px">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


</head>

<body>
<div class="header">
    <div class="row">
        <div class="col-lg-6">
            <span class="logo">RainForest School</span></div>
        <div class="col-md-2 col-md-offset-4">
            <a href="" class="btn btn-primary"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a>

        </div>



    </div><!--header row closed-->
</div>

@yield('content')

<!--Footer start-->
<div class="row footer">
    <div class="col-md-3 box">
        <a href="http://www.netcamp.in" target="_blank">About us</a>
    </div>
    <div class="col-md-3 box">
        <a href="{{route('account.log')}}" >Admin Login</a></div>
    <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#developers">Developer</a>
    </div>
    <div class="col-md-3 box">
        <a href="" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developer</span></h4>
            </div>

            <div class="modal-body">
                <p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/gp.jpg') }}" width=100 height=100 alt="" class="img-rounded">
                    </div>
                    <div class="col-md-5">
                        <a href="https://www.facebook.com/chuky.ehuriah" style="color:#202020; font-size:18px" title="Find on Facebook">olawuyi rilwan </a>
                        <h4 style="color:#202020;font-size:16px" class="title1">+2347088510224</h4>
                        <h4 style="">olawuyirilwan@gmail.com</h4>
                        <h4 style="">University of Ilorin, Ilorin</h4></div></div>
                </p>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--footer end-->
<script src="js/jquery.js" type="text/javascript"></script>

<script src="js/bootstrap.min.js"  type="text/javascript"></script>


<script src="js/app.js"  type="text/javascript"></script>
</body>
</html>
