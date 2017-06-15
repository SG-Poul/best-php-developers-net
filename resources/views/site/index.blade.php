@extends ('layouts.master')

@section ('content')
    {{--@foreach($posts as $post)--}}
    {{--@include('post.post')--}}
    {{--@endforeach--}}

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active">1</li>
            <li data-target="#myCarousel" data-slide-to="1">2</li>
            <li data-target="#myCarousel" data-slide-to="2">3</li>
            <li data-target="#myCarousel" data-slide-to="3">4</li>
            <li data-target="#myCarousel" data-slide-to="4">5</li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="/img/index-slider-1.png" alt="First slide">
            </div>
            <div class="item">
                <img class="second-slide"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Second slide">
            </div>
            <div class="item">
                <img class="third-slide"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Third slide">
            </div>
            <div class="item">
                <img class="forth-slide"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Forth slide">
            </div>
            <div class="item">
                <img class="fifth-slide"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Fifth slide">
            </div>
        </div>
        <div class="container">
            <div class="carousel-caption">
                <h1>Dedicated PHP Team</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <p>Our aim is to help clients get a better quality of service, so we offer a team of dedicated
                            PHP developers who are expertly qualified and can add a great value to your projects</p>
                    </div>
                </div>
                <p><a class="btn btn-lg btn-primary" id="slide-button" href="#" role="button">Hire PHP Developers <span
                                class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->

    <div id="count-dev-exp">
        <span><span class="blue-span">120</span> professional senior PHP developers / <span class="blue-span">7</span>
            years experience</span>
    </div>

    <div id="php-choice">
        <div class="container">
            <div class="centered">
                <h1><strong>PHP </strong>Development</h1>
                <p>
                    PHP development is an optimal choice <br/> for every business at least because it is:
                </p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="/img/index-earth-ico.png">
                    <div class="centered">
                        <h1><strong>Scalable</strong></h1>
                        <p>
                            Scalable and universally usable with a variety of portals and libraries.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="/img/index-phone-ico.png">
                    <div class="centered">
                        <h1><strong>Flexible</strong></h1>
                        <p>
                            Flexible and easily compatible with the majority of the existing platforms.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="/img/index-free-ico.png">
                    <div class="centered">
                        <h1><strong>Free</strong></h1>
                        <p>
                            You cannot find any other web development tool that is as free and functional as PHP.
                        </p>
                    </div>
                </div>
            </div>

            <div class="centered">
                <p><a class="btn btn-lg btn-primary hire-button" href="#" role="button">Hire PHP Developers <span
                                class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>
            </div>
        </div>
    </div>

    <div id="contact-form-section">
        <div class="container">
            <div class="centered">
                <br/>
                <h1><strong>You're in Best Company</strong></h1>
                <p>Our company really is better than other companies</p>
                <br/>
            </div>
        </div>
    </div>

@endsection
