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
                    <h1 class="ui-title-page">Our services</h1>
                    <div class="ui-subtitle-page"></div>
                    <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section__inner -->
</div><!-- end section-title -->


<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block"><span class="ui-title-emphasis">fastest shipping</span>Gisel Overseas</h2>
                <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                <div class="ui-subtitle-block ui-subtitle-block_mod-b">Essential Logistics Services in Global Trade</div>
                <div class="text-container text-center">Services play a crucial role in global trade by facilitating the efficient movement of goods across borders through various transportation methods, including air, sea, road, and rail. They ensure timely deliveries, which are essential for maintaining robust supply chains worldwide. These services provide flexible options for both businesses and individuals, accommodating everything from small packages to large shipments, regardless of distance.</div>
            </div>
        </div>
    </div>
</section>


<div class="section-progress clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                

                <div class="progress-center">
                    <img class="center-block img-responsive" src="{{asset('assets/media/bg/bg-1.jpg')}}" alt="background">
                    
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section-progress -->


<section class="section-area">
    <div class="section-bg_mod-a section-title-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block"><span class="ui-title-emphasis">main services</span>what we offers</h2>
                    <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-top-minus section_mod-d">
        <div class="container">
            <div class="row">
                @foreach ($service as  $item)
                <div class="col-sm-4">
                    <article class="post post_mod-b post_mod-b_mg-btn clearfix">
                        <div class="entry-media">
                            <a class="prettyPhoto" href="">
                                <img class="img-responsive" src="{{asset($item->img)}}"  alt="Foto" style="width: 320px; height: 220px; object-fit: cover;"> 
                            </a>
                        </div>
                        <div class="entry-main" style=" height: 400px; object-fit: cover;">
                            <div class="entry-header">
                                <h2 class="entry-title ui-title-inner"><a href="blog-post.html">{{$item->headline}}</a></h2>
                                <div class="decor-2 decor-2_mod-b"></div>
                            </div>
                            <div class="entry-content">
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </article>
                </div>
               @endforeach
    
               
            </div>
        </div>
    </div>
    
</section>


<section class="section-bg">
    <div class="parallax-bg parallax-primary">
        <ul class="bg-slideshow">
            <li>
                <div style="background-image:url({{asset('assets/media/bg/bg-7.jpg')}})" class="bg-slide"></div>
            </li>
        </ul>
    </div>
    {{-- <div class="section__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="block-download clearfix">
                        <div class="block-download__inner">
                            <h2 class="block-download__title">Download our service Brochures</h2>
                            <div class="block-download__description">Lorem ipsum dolor sit amet consectetur adipisicing elit douis eiusmod tempor incididunt sed</div>
                        </div>
                        <div class="block-download__btn">
                            <a class="btn btn_mod-c btn-sm btn-effect" href="{{asset('assets/files/download.pdf')}}"><span class="btn__inner">DOWNLOAD now</span></a>
                        </div>
                        <i class="block-download__icon flaticon-map2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>


{{-- <div class="section-default parallax-bg parallax-dark">
    <ul class="bg-slideshow">
        <li>
            <div style="background-image:url({{asset('assets/media/bg/bg-4.jpg')}})" class="bg-slide"></div>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {{-- <section class="section-reviews section__inner">
                    <h2 class="ui-title-block ui-title-block_mod_color reviews-list__title">they trust us</h2>
                    <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                    <div class="owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel"
                        data-pagination="true"
                        data-navigation="false"
                        data-single-item="true"
                        data-auto-play="700000"
                        data-transition-style="fade"
                        data-main-text-animation="true"
                        data-after-init-delay="3000"
                        data-after-move-delay="1000"
                        data-stop-on-hover="true">
                        <div class="reviews-list">
                            <div class="reviews-list__img"><img class="img-responsive" src="{{asset('assets/media/reviews/member-1.jpg')}}" alt="foto"></div>
                            <div class="reviews-list__inner">
                                <blockquote class="reviews-list__blockquote">
                                    <header>
                                        <cite>
                                            <span class="reviews-list__autor">john matt</span>
                                            <span class="reviews-list__company">CEO Trans globOl LTD.</span>
                                        </cite>
                                    </header>
                                    <p>“ Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor  incididunt ut labore etu dolore magna aliqua enim veniam quis nostrud exercitate ullamco laboris nisi aliquip exea commodo consequat duis aute dolor reprehenderit in lorem ipsum dolor sit ametas consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                </blockquote>
                            </div>
                        </div><!-- end slider -->

                        <div class="reviews-list">
                            <div class="reviews-list__img"><img class="img-responsive" src="{{asset('assets/media/reviews/member-1.jpg')}}" alt="foto"></div>
                            <div class="reviews-list__inner">
                                <blockquote class="reviews-list__blockquote">
                                    <header>
                                        <cite>
                                            <span class="reviews-list__autor">john matt</span>
                                            <span class="reviews-list__company">CEO Trans globOl LTD.</span>
                                        </cite>
                                    </header>
                                    <p>“ Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor  incididunt ut labore etu dolore magna aliqua enim veniam quis nostrud exercitate ullamco laboris nisi aliquip exea commodo consequat duis aute dolor reprehenderit in lorem ipsum dolor sit ametas consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                </blockquote>
                            </div>
                        </div><!-- end slider -->
                    </div>
                </section> --}}
            {{-- </div>
        </div>
    </div>
</div> --}} 

@endsection