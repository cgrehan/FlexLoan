<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.ico")}}">
    <title>{{ config('app.name', 'FlexpayLoan') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/theme.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/admin-forms.css")}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style>
        /*    .blackandwhite {
            color:#fff;
            background-color:#333;
            background-image: -moz-linear-gradient(left, right,
                                  from(#000),
                                  color-stop(50%, #B1BC8D),
                                  to(#fff));
            background-image: -webkit-gradient(linear, left top, right top,
                                      color-stop(0%, #000),
                                  color-stop(50%, #B1BC8D),
                                    color-stop(100%, #000));CEE5DF, 37BC9B, D3E2DE
        }*/


        .admin-form .panel-info > .panel-heading {
            /*  border-top-color: none;*/
        }
        .admin-form .panel-heading {
            border-top: 8px solid #1e8c70;
        }
        body.external-page .login-links a {
            /*  color: #50B7DE;*/
            color: #666;
            font-weight: 300;
        }
        .admin-form.theme-info .section-divider span {
            /*  color: #37BC9B;*/
        }
        body.external-page .login-links a:hover {
            color: #fff;
        }
        body.external-page #main {
            background: url("assets/img/test-texture.png") #ccc;
            /*                                       background-color:
                                                  background: url("https://Pombasms.co.ke/assets/img/test-texture.png");*/
            /*background: url("https://Pombasms.co.ke/assets/img/bg-noise.png");*/


            /*              background: #636363;*/
            /*color:#fff;
                background:#E9E9E9;*/
            /*	background-image: -moz-linear-gradient(left, right,
                                      from(#37BC9B),
                                      color-stop(50%, #555),
                                      to(#fff));
                background-image: -webkit-gradient(linear, left top, right top,
                                          color-stop(0%, #777),
                                      color-stop(50%, #ccc),#355155
                                        color-stop(100%, #777));*/

            /*  background-image: -webkit-linear-gradient(287deg,#270530 10%,#196d82 36%,#fff 70%);
              background-image: -moz-linear-gradient(287deg,#270530 10%,#196d82 36%,#fff 70%);
              background-image: -o-linear-gradient(287deg,#270530 10%,#196d82 36%,#fff 70%);
              background-image: -ms-linear-gradient(287deg,#270530 10%,#196d82 36%,#fff 70%);*/
            /*  background-image: linear-gradient(163deg,#355155 10%,#196d82 36%,#ddd 80%);
              -webkit-background-size: 100% 1100px;
              -moz-background-size: 100% 1100px;
              background-size: 100% 1100px;
              background-repeat: no-repeat;*/

        }
        .bg-light .text-muted {
            color: #666;
        }

        body.external-page #content .admin-form {
            margin-top: 3%;
        }
    </style>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-64370959-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body class="external-page sb-l-c sb-r-c">
<div id="main" class="">
    <section id="content_wrapper">
        <section id="content">
            <div class="admin-form theme-info animated fadeIn" id="login1">
                <div class="row table-layout">
                    <div class="col-xs-6 va-m pln">
                        <a href="#" title="Home" style="color: #fff; font-size: 40px; font-weight: 800;  text-shadow: 1px 1px 1px #000;">
                            FlexpayLoan
                        </a>
                    </div>
{{--                    <div class="col-xs-6 text-right va-b pr5">--}}
{{--                        <div class="login-links">--}}
{{--                            <a href="#" class="" title="Sign In">Home</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="panel panel-info mt10 br-n">
{{--                    @include('layouts.flash-message')--}}

                    @yield("content")
                </div>
            </div>
        </section>
    </section>
</div>

<script type="text/javascript" src="{{asset("assets/libs/js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("assets/libs/js/jquery-ui.min.js")}}"></script>
<script type="text/javascript" src="{{asset("assets/libs/js/bootstrap.min.js")}}"></script>
</body>
</html>
