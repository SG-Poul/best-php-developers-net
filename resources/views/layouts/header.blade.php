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
            <div class="col-sm-5">
                <table id="phone-table">
                    <tr>
                        <td rowspan="3"><img src="/img/ph.png"></td>
                        <td style="color: #6082bb; font-weight: bold"> USA  </td>
                        <td><a href="tel:+19299991235"> +1-929-999-1235 </a></td>
                        <td rowspan="3"><img src="/img/sk.png"></td>
                        <td rowspan="3"><a href="callto:bestdevelopers">bestdevelopers</a></td>
                    </tr>
                    <tr>
                        <td style="color: #6082bb; font-weight: bold"> DEU </td>
                        <td><a href="tel:+442035145635"> +44-203-514-5635 </a></td>
                    </tr>
                    <tr>
                        <td style="color: #6082bb; font-weight: bold"> UKR </td>
                        <td><a href="tel:+380567940298"> +38-056-794-0298 </a></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-7">
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
                            <li class="{{ (Request::is('/php-development') ? 'active' : '') }}">
                                <a href="{{ url('/php-development') }}" style="border-right: 1px solid #6082bb"><i class="fa fa-home"></i>PHP Development</a>
                            </li>
                            <li class="{{ (Request::is('articles') ? 'active' : '') }}">
                                <a href="{{ url('articles') }}" style="border-right: 1px solid #6082bb">Hire PHP Developers</a>
                            </li>
                            <li class="{{ (Request::is('about') ? 'active' : '') }}">
                                <a href="{{ url('about') }}" style="border-right: 1px solid #6082bb">Dedicated PHP Team</a>
                            </li>
                            <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                                <a href="{{ url('contact') }}">Company</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>