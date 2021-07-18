
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css')}}">
    <livewire:styles />
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
    @include('layouts.partials.header')

	<main id="main">
		<div class="container">

           {{$slot}}

		</div>

	</main>

	@include('layouts.partials.footer')
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('assets/js/functions.js')}}"></script>
    
<script>
    window.addEventListener('show-modalHomePage', event=>{
        $('#offer').modal('show');
       
    })
</script>

<livewire:scripts />
</body>
</html>