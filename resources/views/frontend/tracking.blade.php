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
                    <h1 class="ui-title-page">Tracking</h1>
                    <div class="ui-subtitle-page"></div>
                    <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section__inner -->
</div><!-- end section-title -->

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection