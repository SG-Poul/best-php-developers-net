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

@endsection
