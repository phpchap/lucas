<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="author" content="@yield('author')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta charset="utf-8"/>
    <link
        href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAD/kesAAAAAAP9j4gD/zPYA////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERERERFBEREREREREUERERERERFEREEREREAERFBEREREAABEUEREREzMzIRERERE0A0MzERERFEMEQzQxEREEMCREA0MRECMCJEQgMgEQNERERERDAREEREREREARERA0REQzAREUEREREREREURBERERERERFBERERERERH/+wAA//sAAP5gAAD8OwAA+BsAAPAPAADgBwAAwAMAAIABAAAAAAAAAAAAAIABAADAAwAAoAcAAB//AAC//wAA"
        rel="icon" type="image/x-icon"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen"/>
    <link href="css/flexslider.css" rel="stylesheet" media="screen"/>
    <link href="css/jquery.vegas.css" rel="stylesheet" media="screen"/>
    <link href="css/style.min.css" rel="stylesheet" media="screen"/>
    <!--[if IE 7]>
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if gte IE 9]>
    <style type="text/css">
    </style>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript">
        $().ready(function () {
            // validate the comment form when it is submitted
            $("#commentForm").validate({
                submitHandler: function () {
                    // gather
                    var d_name = $("#cname").val();
                    var d_email = $("#cemail").val();
                    var d_comment = $("#ccomment").val();
                    var d_phone = $("#phone").val();
                    // post it..
                    $.post("<?php echo url('/contact'); ?>", { name: d_name, email: d_email, comment: d_comment, phone: d_phone }, function (data, status) {
                        if (status == "success") {
                            window.location.replace("/thanks");
                        } else {
                            $("#commentForm").html("<h2>There was an error sending the message, please try again</h2>");
                        }
                    });
                }
            });
        });
    </script>
</head>

<body>

<a id="back-top" href="javascript:void(0)"><i class="icon-chevron-up"></i></a>

<!-- header -->
<header id="header">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="navbar">
                    <div class="navbar-inner">
                        <a class="btn btn-navbar" data-toggle="collapse"
                           data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="javascript:void(0)">
                            <h1 id="logo">London DE</h1>
                        </a>
                        @yield('nav')
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('contact')

<!-- investment -->
<section id="home" class="box">
    <div class="container">
        <div class="panel">
            <div class="row-fluid">
                @yield('intro')
            </div>
        </div>
    </div>
</section>

@yield('first_section')

@yield('second_section')

@yield('third_section')

@yield('fourth_section')

<!-- ligthbox -->
<div style="display: none;" id="lightbox"><img id="bigimg" src=""/></div>

<!-- scripts -->
<script type="text/javascript" src="js/signals.min.js"></script>
<script type="text/javascript" src="js/crossroads.min.js"></script>
<script type="text/javascript" src="js/hasher.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.vegas.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/googlemaps.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-50747301-1', 'londonde.co.uk');
ga('send', 'pageview');
</script>
</body>
</html>