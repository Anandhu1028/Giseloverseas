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
                    <h1 class="ui-title-page">About us</h1>
                    <div class="ui-subtitle-page"></div>
                    <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section__inner -->
</div><!-- end section-title -->


<section class="section_mod-e">
    <div class="block-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="ui-title-block"><span class="ui-title-emphasis ui-title-emphasis_sm">we provide best <br> international freight &</span>logistics services</h2>
                    <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    <div class="ui-subtitle-block">Gisel Overseas: Your Trusted Partner in Import and Export Logistic</div>
                    <div class="block-about__description">
                        <p>Gisel Overseas is a logistics company specializing in import and export services, dedicated to facilitating the smooth movement of goods across international borders. They offer comprehensive freight forwarding solutions, coordinating shipments via air, sea, or land to ensure efficiency and cost-effectiveness. In addition to freight services, Gisel Overseas assists clients with customs clearance, navigating complex regulations to guarantee compliance and timely deliveries. The company also provides warehousing solutions for storage before shipment or after arrival, along with supply chain management services that optimize the entire logistics process. Furthermore, Gisel Overseas offers consulting to help businesses develop effective logistics strategies and stay informed about international trade regulations.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-sm-6">
                    <img class="block-about__img img-responsive" src="{{asset('assets/media/posts/487x335/2.jpg')}}" alt="Foto">
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section><!-- end section-default -->


<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block ui-title-block_mod-b">Our Business Mission <span class="decor-4 decor-4_mod-c"><i class="icon flaticon-logistics3 color-primary"></i></span> is Client’s Satisfaction</h2>

                <div class="owl-carousel owl-theme enable-owl-carousel"
                    data-pagination="false"
                    data-navigation="false"
                    data-single-item="true"
                    data-auto-play="7000"
                    data-transition-style="fade"
                    data-main-text-animation="true"
                    data-after-init-delay="3000"
                    data-after-move-delay="1000"
                    data-stop-on-hover="true">

                    <div class="reviews">
                        <div class="reviews__text">Our mission is to ensure client satisfaction through reliable logistics solutions in the import-export industry. We connect global markets with timely deliveries and prioritize transparency and innovation to exceed client expectations</div>
                        
                    </div>

                    

                </div><!-- end slider -->

            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section-default -->


<div class="section-bg_mod-d">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-carousel owl-theme enable-owl-carousel"
                    data-min480="1"
                    data-min768="2"
                    data-min992="3"
                    data-min1200="3"
                    data-pagination="false"
                    data-navigation="true"
                    data-auto-play="4000"
                    data-stop-on-hover="true">


                    <article class="post post_mod-b clearfix">
                        <div class="entry-media">
                            <a class="prettyPhoto" href="{{asset('assets/media/posts/320x220/1.jpg')}}">
                                <img class="img-responsive" src="{{asset('assets/media/posts/320x220/image-1.jpeg')}}"  alt="Foto" style="width: 320px; height: 220px; object-fit: cover;"> 
                        </div>

                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner"><a href="blog-post.html">Import Export Forwarding</a></h2>
                                <div class="decor-2 decor-2_mod-b"></div>
                            </div>
                            <div class="entry-content">
                                <p>Import and export forwarding services focus on the efficient transportation of goods across international borders</p>
                            </div>
                        </div>
                    </article>

                    <article class="post post_mod-b clearfix">
                        <div class="entry-media">
                            <a class="prettyPhoto" href="{{asset('assets/media/posts/320x220/2.jpg')}}">
                                <img class="img-responsive" src="{{asset('assets/media/posts/320x220/images-2.jpeg')}}"  alt="Foto" style="width: 320px; height: 220px; object-fit: cover;">
                            </a>
                        </div>

                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner"><a href="blog-post.html">fastest delivery network</a></h2>
                                <div class="decor-2 decor-2_mod-b"></div>
                            </div>
                            <div class="entry-content">
                                <p>A fast delivery network expedites transportation of goods using advanced logistics and technology for prompt service</p>
                            </div>
                        </div>
                    </article>

                    <article class="post post_mod-b clearfix">
                        <div class="entry-media">
                            <a class="prettyPhoto" href="{{asset('assets/media/posts/320x220/3.jpg')}}">
                                <img class="img-responsive" src="{{asset('assets/media/posts/320x220/image-3.jpg')}}"  alt="Foto" style="width: 320px; height: 220px; object-fit: cover;">
                            </a>
                        </div>

                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner"><a href="blog-post.html">solutions with technique</a></h2>
                                <div class="decor-2 decor-2_mod-b"></div>
                            </div>
                            <div class="entry-content">
                                <p>Use algorithms and GPS to find efficient delivery routes, considering traffic, road conditions, and distance</p>
                            </div>
                        </div>
                    </article>
                </div><!-- end slider -->
            </div>
        </div>
    </div>
</div>





<div class="section-default parallax-bg parallax-dark">
    <ul class="bg-slideshow">
        <li>
            <div style="background-image:url({{asset('assets/media/bg/bg-6.jpg)')}}" class="bg-slide"></div>
        </li>
    </ul>
    <div class="section__inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="text-center">
                        
                        <h2 class="ui-title-block" style="color:aliceblue"><span class="ui-title-emphasis" style="color:aliceblue">our history</span>how we achieved</h2>
                        <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                    </div>
                    <div class="ui-subtitle-block ui-subtitle-block_mod-a" style="color:aliceblue">Gisel Overseas Export Logistics Company is a key player in the global logistics industry. Initially a small freight forwarding firm, it expanded to offer customs brokerage, warehousing, and supply chain management, helping clients navigate international trade complexities. Known for its commitment to technology and strong partnerships, Gisel has built a reputation for excellence and timely delivery, operating across multiple continents to meet the evolving needs of its clientele</div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section-area">
    <div class="section-bg_mod-a section-title-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block"><span class="ui-title-emphasis">dedicated & Professional</span>meet our team</h2>
                    <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-top-minus section_mod-a">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="owl-carousel owl-theme enable-owl-carousel"
                        data-min480="2"
                        data-min768="2"
                        data-min992="3"
                        data-min1200="4"
                        data-pagination="false"
                        data-navigation="false"
                        data-auto-play="4000"
                        data-stop-on-hover="true">

                        <section class="list-staff">
                            <div class="list-staff__img"><img class="img-responsive" src="{{asset('assets/media/staff/member-2.jpg')}}" alt="Foto"></div>
                            <div class="list-staff__categories">managing director</div>
                            <h3 class="list-staff__name ui-title-inner">john deo</h3>
                            <div class="decor-3"></div>
                            <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                            <ul class="social-links list-inline">
                                <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                            </ul>
                        </section>

                        <section class="list-staff">
                            <div class="list-staff__img"><img class="img-responsive" src="{{asset('assets/media/staff/member-1.jpg')}}" alt="Foto"></div>
                            <div class="list-staff__categories">project manager</div>
                            <h3 class="list-staff__name ui-title-inner">Richard david</h3>
                            <div class="decor-3"></div>
                            <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                            <ul class="social-links list-inline">
                                <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                            </ul>
                        </section>

                        <section class="list-staff">
                            <div class="list-staff__img"><img class="img-responsive" src="{{asset('assets/media/staff/member-7.jpg')}}" alt="Foto"></div>
                            <div class="list-staff__categories">project manager</div>
                            <h3 class="list-staff__name ui-title-inner">Elina bell</h3>
                            <div class="decor-3"></div>
                            <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                            <ul class="social-links list-inline">
                                <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                            </ul>
                        </section>

                        <section class="list-staff">
                            <div class="list-staff__img"><img class="img-responsive" src="{{asset('assets/media/staff/member-4.jpg')}}" alt="Foto"></div>
                            <div class="list-staff__categories">cargo expert</div>
                            <h3 class="list-staff__name ui-title-inner">mark donald</h3>
                            <div class="decor-3"></div>
                            <div class="list-staff__description">Lorem ipsum dolor sit ameut consectetu dipisicing elit sed do eiusmod tempor cd dunt labore et dolore magna.</div>
                            <ul class="social-links list-inline">
                                <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>
                            </ul>
                        </section>
                    </div><!-- end carousel -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection