@extends('layouts.frontend.app')
@section('content')

<div class="section-title parallax-bg parallax-light">
    <ul class="bg-slideshow">
        <li>
            <div style="background-image:url({{asset('assets/media/bg/bg-title.jpg')}})" class="bg-slide"></div>
        </li>
    </ul>
    <div class="section__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="ui-title-page">Contact us</h1>
                   
                    <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section__inner -->
</div><!-- end section-title -->


<div class="map"><img class="img-responsive" src="{{asset('assets/media/map.jpg')}}" alt="map"></div>

<div class="section_mod-c">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <section class="section-contacts-block">
                    <h3 class="contacts-block__title ui-title-inner">Gisel Overseas</h3>
                    <div class="decor-2 decor-2_mod-b"></div>
                    <div class="contacts-block__description">Feel free to contact us via phone or email anytime if you have any questions or need help!</div>
                    <div class="contacts-block clearfix">
                        <i class="icon flaticon-telephone114"></i>
                        <span class="contacts-block__inner">
                            <span class="contacts-block__emphasis color-primary">+91 9061919121</span> 24/7 Free HelpLine</span>
                    </div>
                    <div class="contacts-block clearfix">
                        <i class="icon flaticon-mail45"></i>
                        <span class="contacts-block__inner">
                            <a class="contacts-block__emphasis color-primary" href="mailto:GISELCCJ@GMAIL.COM">GISELCCJ@GMAIL.COM</a> We usually reply within 24 hours</span>
                    </div>
                </section><!-- end contacts-block -->

                <section class="section-contacts-block">
                    <h3 class="contacts-block__title ui-title-inner">visit Headoffice</h3>
                    <div class="decor-2 decor-2_mod-b"></div>
                    <div class="contacts-block contacts-block_mod-a clearfix">
                        <i class="icon flaticon-location74"></i>
                        <span class="contacts-block__inner">Calicut.Airport ,karippur Malappuram.Dt.Kerala</span>
                    </div>
                    
                    <div class="contacts-block contacts-block_mod-a clearfix">
                        <i class="icon flaticon-laptop118"></i>
                        <span class="contacts-block__inner">www.giseloverseas.com</span>
                    </div>
                </section><!-- end contacts-block -->


                <div class="contacts-block__social clearfix">
                    <div class="contacts-block__wrap-social">
                        <div class="decor-3"></div>
                        <a class="btn-link" href="home.html">get connected</a>
                    </div>
                    <ul class="social-links social-links_mod-a social-links_mod-b list-inline">
                        <li><a target="_blank" href="https://twitter.com/"><i class="icons fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icons fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://linkedin.com/"><i class="icons fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icons fa fa-google"></i></a></li>
                        <li><a target="_blank" href="https://vimeo.com/"><i class="icons fa fa-vimeo"></i></a></li>
                        <li><a target="_blank" href="https://instagram.com/"><i class="icons fa fa-instagram"></i></a></li>
                    </ul>
                </div>

                

            </div><!-- end col -->


            <div class="col-md-7 col-md-offset-1">
                <section class="section-form-request">
                    <div class="wrap-title-block wrap-title-block_mod-c">
                        <h3 class="ui-title-block ui-title-block_mod-c">send a message</h3>
                        <div class="decor-1 decor-1_mod-b"><i class="icon flaticon-delivery36"></i></div>
                    </div>

                    <form class="form-request" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="first Name" required>
                            </div><!-- end col -->
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="last Name" required>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="email" placeholder="Email address" required>
                            </div><!-- end col -->
                            <div class="col-sm-6">
                                <input class="form-control" type="tel" placeholder="phone no." required>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" placeholder="Enquiry type / subject" required>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea class="form-control" placeholder="message" required="" rows="19"></textarea>
                                <button type="button" class="btn btn_mod-a btn-sm btn-effect pull-right"><span class="btn__inner">send message</span></button>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </form><!-- end form-request -->
                </section>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div><!-- end section-area -->

@endsection