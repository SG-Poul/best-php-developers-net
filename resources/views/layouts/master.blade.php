
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
            {{--<div class="col-xs-6">--}}
                <table id="phone-table">
                    <tr>
                        <td rowspan="3"><img src="/img/ph.png"></td>
                        <td> USA  </td>
                        <td> +1-929-999-1235 </td>
                        <td rowspan="3"><img src="/img/sk.png"></td>
                        <td rowspan="3">bestdevelopers</td>
                        <td rowspan="3"> </td>
                        <td rowspan="3"> <a href="#">PHP Development</a></td>
                        <td rowspan="3"> | </td>
                        <td rowspan="3"> <a href="#">Hire PHP Developers</a></td>
                        <td rowspan="3"> | </td>
                        <td rowspan="3"> <a href="#">Dedicated PHP Team</a></td>
                        <td rowspan="3"> | </td>
                        <td rowspan="3"> <a href="#">Company</a></td>
                    </tr>
                    <tr>
                        <td> DEU </td>
                        <td> +44-203-514-5635 </td>
                    </tr>
                    <tr>
                        <td> UKR </td>
                        <td> +38-056-794-0298 </td>
                    </tr>
                </table>
            {{--</div>--}}
            {{--<div class="col-xs-6">--}}



            {{--</div>--}}
        </div>
    </div>
</div>

@yield('content');

@yield('script');

</body>
</html>