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
                    <h1 class="ui-title-page">gallery</h1>
                    
                    <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                </div>
                <!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end section__inner -->
</div><!-- end section-title -->

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;margin-top: 10px;">
    <div class="row justify-content-center">
        @foreach ($gallery as $item)
            <div class="col-md-3 col-sm-6 mb-4">
                <article class="post post_mod-c clearfix border rounded shadow-sm h-100">
                    <div class="entry-media text-center">
                        <img class="img-responsive w-100" src="{{ asset($item->img) }}" alt="Foto" style="height: 250px; object-fit: cover;">
                    </div>
                    <div class="entry-main p-3">
                        <div class="entry-header text-center mb-2">
                            <h6 class="entry-title ui-title-inner font-weight-bold">{{ $item->headline }}</h6>
                        </div>
                        <div class="entry-content text-center">
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</div>




@endsection