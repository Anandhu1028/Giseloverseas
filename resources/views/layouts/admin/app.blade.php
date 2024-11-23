<!doctype html>
<html lang="en">


<head>
	<title>: Gisel  Overseas : Admin </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
	<meta name="keyword" content="bootstrap admin template">

	
@include('layouts.admin.style')
</head>

<body data-bvite="theme-CeruleanBlue" class="layout-border svgstroke-a layout-default">

    <main class="container-fluid px-0">

        @include('layouts.admin.sidebar')

        @include('layouts.admin.header')
	

        


        @yield('content')




        @include('layouts.admin.footer')


		@include('layouts.admin.script')





    </main>
</body>
</html>

