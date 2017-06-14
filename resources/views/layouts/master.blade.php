
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Developers</title>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="top-header-div">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div id="header-logo-div">
                    <a href="/">
                        <img src="/img/header-logo.png">
                    </a>
                </div>
            </div>
            <div class="col-xs-6">
                <div id="header-navbar">
                    <a href="/">Home</a>
                    <a href="/">Prices</a>
                    <a href="/">Projects</a>
                    <a href="/">Photos</a>
                    <a href="/">Contacts</a>
                    <a href="/">Request free quote</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="nav-bar-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <table id="phone-table">
                    <tr>
                        <td rowspan="3"><img src="/img/ph.png"></td>
                        <td style="color: #6082bb; font-weight: bold"> USA  </td>
                        <td> +1-929-999-1235 </td>
                        <td rowspan="3"><img src="/img/sk.png"></td>
                        <td rowspan="3">bestdevelopers</td>
                        {{--<td rowspan="3"> </td>--}}
                        {{--<td rowspan="3"> <a href="#">PHP Development</a></td>--}}
                        {{--<td rowspan="3"> | </td>--}}
                        {{--<td rowspan="3"> <a href="#">Hire PHP Developers</a></td>--}}
                        {{--<td rowspan="3"> | </td>--}}
                        {{--<td rowspan="3"> <a href="#">Dedicated PHP Team</a></td>--}}
                        {{--<td rowspan="3"> | </td>--}}
                        {{--<td rowspan="3"> <a href="#">Company</a></td>--}}
                    </tr>
                    <tr>
                        <td style="color: #6082bb; font-weight: bold"> DEU </td>
                        <td> +44-203-514-5635 </td>
                    </tr>
                    <tr>
                        <td style="color: #6082bb; font-weight: bold"> UKR </td>
                        <td> +38-056-794-0298 </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-5">
                <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                                    <a href="{{ url('') }}" style="border-right: 1px solid #6082bb"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li class="{{ (Request::is('articles') ? 'active' : '') }}">
                                    <a href="{{ url('articles') }}" style="border-right: 1px solid #6082bb">Articles</a>
                                </li>
                                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                                    <a href="{{ url('about') }}" style="border-right: 1px solid #6082bb">About</a>
                                </li>
                                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                                    <a href="{{ url('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            </div>
        </div>
    </div>
</div>

@yield('content');

<div id="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; Copyright 2006 - <?= date("Y") ?> PHP Developers. All rights reserved.
            </div>
            <div class="col-sm-6">
                <a href="{{ url('contact') }}">About Us</a>
                |
                <a href="{{ url('contact') }}">Contacts</a>
                |
                <a href="{{ url('contact') }}">Sitemap</a>
                |
                <a href="{{ url('contact') }}">Privacy</a>
                |
                <a href="{{ url('contact') }}">Teams</a>
            </div>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
@yield('script');

</body>
</html>