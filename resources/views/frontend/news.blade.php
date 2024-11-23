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
                    <h1 class="ui-title-page">news blog</h1>
                    <div class="ui-subtitle-page">Get latest company news here</div>
                    <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section__inner -->
</div><!-- end section-title -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row">
        <div class="col-md-9 col-sm-8" style="margin-left: 100px">
            <div class="section-default section-posts">
                @foreach ($news as $item)
                    <!-- Each article has its own black border -->
                    <article class="post post_mod-c clearfix mb-4 border rounded shadow-sm" style="border: 1px solid black;">
                        <div class="entry-media text-center">
                            <img class="img-responsive" src="{{ asset($item->img) }}" alt="Foto" style="width: 100%; height: auto; max-height: 300px; object-fit: cover;">
                        </div>
                        <div class="entry-main p-3">
                            <div class="entry-header text-center mb-2">
                                <p class="text-muted mb-1">{{ $item->date }} | By {{ $item->author }}</p>
                                <h2 class="entry-title ui-title-inner font-weight-bold">{{ $item->headline }}</h2>
                            </div>
                            <div class="entry-content text-center">
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach

                <ul class="pagination pagination_mod-a justify-content-center">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="pagination__first-arrow"><a href="#"><i class="icon fa fa-angle-left"></i></a></li>
                    <li><a href="#"><i class="icon fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>





@endsection