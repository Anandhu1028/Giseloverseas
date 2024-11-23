<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.frontend.style')
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js"></script>
		<script src="assets/js/modernizr.custom.js"></script>
</head>
<body >
    <div id="page-preloader"><span class="spinner"></span></div>
    <div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">

       @include('layouts.frontend.header')


        @yield('content')



       @include('layouts.frontend.footer') 

    </div>
   </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
   @include('layouts.frontend.script')
</body>
</html>