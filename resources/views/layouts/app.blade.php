<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">    

    <!-- Basic Page Needs -->		
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">
	<!-- FONTS -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito+Sans:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,400italic,500,600,700,700italic,900'>
	<!-- Bootstrap core CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<!--CSS -->
	<link rel='stylesheet' href="{{asset('css/structure.css')}}">
	<link rel='stylesheet' href="{{asset('css/style.css')}}">
    <link rel='stylesheet' href="{{asset('css/global.css')}}">
    <link rel='stylesheet' href="{{asset('css/custom.css')}}">
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="{{asset('plugins/rs-plugin-6.custom/css/rs6.css')}}"> </head>    

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('TRACKING_ID') }}');
    </script>

</head>
<body class="home page template-slider style-simple button-round layout-full-width if-overlay if-border-hide no-content-padding header-transparent header-fw sticky-header sticky-tb-color ab-hide subheader-both-left menu-link-color menuo-right menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky">
    
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div id="Top_bar">
                    <div class="row">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="{{ route('home')}}" title="Codeinsights" data-height="60" data-padding="15"><img class="logo-main scale-with-grid" src="{{ asset('images/Logo.png')}}" data-retina="images/Logo@2x.png" data-height="50" alt="Logo"><img class="logo-sticky scale-with-grid" src="{{ asset('images/Logo.png')}}" data-retina="images/Logo@2x.png" data-height="50" alt="Logo">
                                        <img class="logo-mobile scale-with-grid" src="{{ asset('images/Logo.png')}}" data-retina="images/Logo@2x.png" data-height="50" alt="Logo">
                                        <img class="logo-mobile-sticky scale-with-grid" src="{{ asset('images/Logo.png')}}" data-retina="images/Logo@2x.png" data-height="50" alt="Logo">								
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu menu-main">
                                            <li class="current-menu-item"> <a href="{{ route('home')}}"><span>Home</span></a> </li>
                                            <li> <a href="{{ route('about_us')}}"><span>About us</span></a> </li>
                                            <li> <a href="{{ route('services')}}"><span>Services</span></a> </li>
                                            <li> <a href="{{ route('products')}}"><span>Products</span></a> </li>
                                            <li> <a href="{{ route('contact')}}"><span>Contact</span></a> </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a> </div>
                            </div>
                           <!--  <div class="top_bar_right">
                                <div class="top_bar_right_wrapper"> <a href="https://1.envato.market/9ZxXY" class="action_button" target="_blank">Buy now</a> </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                @yield('header_slider')
            </header>
        </div>
        <div id="Content">
            @yield('content')
        </div>
        <footer id="Footer" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 100px"> </div>
					<div class="col-md-6">
						<div class="image_frame image_item no_link scale-with-grid alignnone no_border">
							<div class="image_wrapper"><img class="scale-with-grid" src="{{ asset('images/Logo.png')}}" alt="Logo" width="207" height="50"> </div>
						</div>
						<hr class="no_line" style="margin: 0 auto 30px auto"> Level 13,2 Elizabeth St,
						<br> Melbourne, Victoria 3000,
						<br> Australia </div>
					<div class="col-md-3">
						<h6>Services</h6><a href="#" style="color:inherit">Complex Page Ranking</a>
						<br> <a href="#" style="color:inherit">Site Optimisation</a>
						<br> <a href="#" style="color:inherit">User Retention</a>
						<br> <a href="#" style="color:inherit">Complex Monitoring</a>
						<br> <a href="#" style="color:inherit">Boosting Ranking</a>
						<br> </div>
					<div class="col-md-3">
						<h6>Website</h6>                        
                        <ul id="menu-main-menu" class="menu menu-main">
                            <li class="current-menu-item"> <a href="{{ route('home')}}"><span>Home</span></a> </li>
                            <li> <a href="{{ route('about_us')}}"><span>About us</span></a> </li>
                            <li> <a href="{{ route('services')}}"><span>Services</span></a> </li>
                            <li> <a href="{{ route('products')}}"><span>Products</span></a> </li>
                            <li> <a href="{{ route('contact')}}"><span>Contact</span></a> </li>
                        </ul>
                    </div>
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 70px"> </div>
				</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one"> <a id="back_to_top" class="footer_button" href><i class="icon-up-open-big"></i></a>
						<div class="copyright">                             
                            Copyright &copy; 2024 by website | All rights reserved.
                        </div>
					</div>
				</div>
			</div>
		</footer>
    </div>
    <div id="Side_slide" class="right dark" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="extras"> <a href="https://1.envato.market/9ZxXY" class="action_button" target="_blank">Buy now</a>
			<div class="extras-wrapper"></div>
		</div>
		<div class="menu_wrapper"></div>
	</div>
	<div id="body_overlay"></div>
    <!-- JS -->
	<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('js/jquery-migrate-3.4.0.min.js')}}"></script>
	<script src="{{asset('js/mfn.menu.js')}}"></script>
	<script src="{{asset('js/jquery.plugins.js')}}"></script>
	<script src="{{asset('js/jquery.jplayer.min.js')}}"></script>
	<script src="{{asset('js/animations/animations.js')}}"></script>
	<script src="{{asset('js/translate3d.js')}}"></script>
	<script src="{{asset('js/scripts.js')}}"></script>	
	<script src="{{asset('plugins/rs-plugin-6.custom/js/revolution.tools.min.js')}}"></script>
	<script src="{{asset('plugins/rs-plugin-6.custom/js/rs6.min.js')}}"></script>
    @yield('script')
	
</body>
</html>
