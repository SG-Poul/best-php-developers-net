<div id="contact-form-section">
    <div class="container">
        <div class="centered">
            <br/>
            <h1><strong>You're in Best Company</strong></h1>
            <p>Our company really is better than other companies</p>
            <br/>
        </div>
        <div class="form-container">
            <form method="POST" action="/quote">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name *" required>
                        <br/>
                    </div>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email *"
                               required>
                        <br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-3">
                        <input type="text" class="form-control" id="skype" name="skype" placeholder="Skype *"
                               required>
                        <br/>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="telephone" name="telephone"
                               placeholder="Telephone *" required>
                        <br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-group">
                            <textarea class="form-control" id="body" name="title" rows="3"
                                      placeholder="Requirements"></textarea>
                    </div>
                </div>
                <div class="centered">
                    <p>
                        <button type="submit" class="btn btn-lg btn-primary hire-button">
                            Get a Free offer Now!
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </button>
                    </p>
                </div>
                @include('layouts.errors')
            </form>
        </div>
    </div>
</div>
<div id="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="centered">
                    <h3><strong><span>PHP</span><br/>OUTSOURCING</strong></h3>
                    <a href="#"><img src="/img/index-fb-ico.png"></a>
                    <a href="#"><img src="/img/index-in-ico.png"></a>
                    <br/>
                    <a href="#"><img src="/img/index-go-ico.png"></a>
                    <a href="#"><img src="/img/index-tw-ico.png"></a>
                </div>
            </div>
            <div class="col-sm-2">
                <h3><strong>COMPANY</strong></h3>
                <a href="#">Overview</a><br/>
                <a href="#">Facts and Figures</a><br/>
                <a href="#">Why Us</a><br/>
                <a href="#">Business Continuity</a><br/>
                <a href="#">Quality Management</a><br/>
                <a href="#">Methodology</a><br/>
            </div>
            <div class="col-sm-2">
                <h3><strong>SERVICES</strong></h3>
                <a href="#">Core Values</a><br/>
                <a href="#">PHP Company</a><br/>
                <a href="#">PHP Consulting</a><br/>
                <a href="#">PHP Staffing</a><br/>
                <a href="#">PHP Services</a><br/>
                <a href="#">Testimonials</a><br/>
            </div>
            <div class="col-sm-2">
                <h3><strong>DEVELOPMENT</strong></h3>
                <a href="#">Hire PHP Developers</a><br/>
                <a href="#">PHP Coders</a><br/>
                <a href="#">PHP Development</a><br/>
                <a href="#">PHP Programmers</a><br/>
                <a href="#">PHP Programming</a><br/>
            </div>
            <div class="col-sm-3">
                <h3><strong>IN THE WEB</strong></h3>
                <a href="tel:+19299991235">+1 929 999 12 35</a><br/>
                <a href="tel:+442035145635">+44 203 514 56 35</a><br/>
                <a href="tel:+380567940298">+38 056 794 02 98</a><br/>
                <br/>
                <h3><strong>E-MAIL</strong></h3>
                <a href="mailto:info@best-php-developers.net">info@best-php-developers.net</a><br/>
                <h3><strong>SKYPE</strong></h3>
                <a href="callto:bestdevelopers">bestdevelopers</a><br/>
            </div>
        </div>
    </div>
</div>
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