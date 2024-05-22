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
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- FONTS -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito+Sans:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,400italic,500,600,700,700italic,900'>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--CSS -->
	<link rel='stylesheet' href="{{asset('css/structure.css')}}">
	<link rel='stylesheet' href="{{asset('css/agency4.css')}}">
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
                                    <a id="logo" href="index.html" title="Codeinsights" data-height="60" data-padding="15"><img class="logo-main scale-with-grid" src="images/Logo.png" data-retina="images/Logo@2x.png" data-height="50" alt="Logo"><img class="logo-sticky scale-with-grid" src="images/Logo.png" data-retina="images/Logo@2x.png" data-height="50" alt="Logo">
                                        <img class="logo-mobile scale-with-grid" src="images/Logo.png" data-retina="images/Logo@2x.png" data-height="50" alt="Logo">
                                        <img class="logo-mobile-sticky scale-with-grid" src="images/Logo.png" data-retina="images/Logo@2x.png" data-height="50" alt="Logo">										
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu menu-main">
                                            <li class="current-menu-item"> <a href="index-agency4.html"><span>Home</span></a> </li>
                                            <li> <a href="about.html"><span>About us</span></a> </li>
                                            <li> <a href="services.html"><span>Services</span></a> </li>
                                            <li> <a href="portfolio.html"><span>Portfolio</span></a> </li>
                                            <li> <a href="contact.html"><span>Contact</span></a> </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a> </div>
                            </div>
                            <div class="top_bar_right">
                                <div class="top_bar_right_wrapper"> <a href="https://1.envato.market/9ZxXY" class="action_button" target="_blank">Buy now</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfn-main-slider mfn-rev-slider">
                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                        <rs-module id="rev_slider_1_1" data-version="6.2.22">
                            <rs-slides>
                                <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;"> <img src="images/agency4-home-splash.jpg" class="rev-slidebg">
                                    <rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-color="#4989fd" data-rsp_ch="on" data-xy="x:c;yo:140px,140px,147px,147px;" data-text="w:normal;s:45;l:25,25,25,25;fw:700;" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Nunito Sans;"> Online solutions </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-color="#0c117b" data-rsp_ch="on" data-xy="x:c;yo:183px,183px,194px,194px;" data-text="w:normal;s:45;l:25,25,25,25;fw:700;" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Nunito Sans;"> to boost your website </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-color="#adadc1" data-rsp_ch="on" data-xy="x:c;yo:250px,250px,156px,156px;" data-text="w:normal;s:14,14,8,8;l:25,25,15,15;a:center;" data-vbility="t,t,f,t" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Nunito Sans;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        <br> Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                        <br> </rs-layer><a id="slider-1-slide-1-layer-4" class="rs-layer rev-btn" href="services.html" target="_self" rel="nofollow" data-type="button" data-rsp_ch="on" data-xy="x:c;xo:-90px,-90px,-100px,-100px;y:m;yo:10px,10px,-34px,-34px;" data-text="w:normal;s:15;l:40;fw:700;" data-dim="minh:0px,0px,none,0px;" data-basealign="slide" data-padding="r:40;l:40;" data-border="bor:25px,25px,25px,25px;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:#f30642;bor:25px,25px,25px,25px;bri:120%;" style="z-index:6;background-color:#f74371;font-family:Roboto;">Our services </a>
                                    <rs-layer id="slider-1-slide-1-layer-5" class="rev-btn" data-type="button" data-color="#0c117b" data-rsp_ch="on" data-xy="x:c;xo:100px;y:m;yo:10px,10px,-34px,-34px;" data-text="w:normal;s:15;l:36;fw:700;" data-dim="minh:0px,0px,none,0px;" data-actions="id:Content;o:click;a:scrollto;offset:-50px;sp:1000ms;e:power1.inOut;" data-basealign="slide" data-padding="r:42,42,40,40;l:42,42,40,40;" data-border="bos:solid;boc:#0c117b;bow:3px,3px,3px,3px;bor:25px,25px,25px,25px;" data-frame_999="o:0;st:w;" data-frame_hover="c:#fff;bgc:#0c117b;boc:rgba(12,17,123,0.62);bor:25px,25px,25px,25px;bos:solid;bow:3px,3px,3px,3px;bri:120%;" style="z-index:6;background-color:rgba(247,67,113,0);font-family:Roboto;"> Learn more </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-7" data-type="text" data-color="#4989fd" data-rsp_ch="on" data-xy="x:r;xo:-20px,-20px,-12px,-12px;y:m;yo:10px,10px,6px,6px;" data-text="w:normal;s:15,15,9,9;l:25,25,15,15;fw:800;" data-vbility="t,t,f,t" data-basealign="slide" data-btrans="rZ:90;" data-frame_999="o:0;st:w;" data-loop_0="y:-10;oX:20%;oY:20%;" data-loop_999="y:10;sp:4000;e:sine.inOut;yym:t;" style="z-index:5;font-family:Nunito Sans;"> SCROLL DOWN <i class="fa-arrow-right" style='color:#f74371; margin-left:25px'></i> </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-8" data-type="text" data-color="#adadc1" data-rsp_ch="on" data-xy="x:r;xo:164px,164px,102px,102px;y:b;yo:87px,87px,53px,53px;" data-text="w:normal;s:14,14,8,8;l:25,25,15,15;fw:700;a:center;" data-vbility="t,t,f,t" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Nunito Sans;"> Visit our Social Media </rs-layer><a id="slider-1-slide-1-layer-12" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="button" data-rsp_ch="on" data-xy="x:r;xo:95px,95px,59px,59px;y:b;yo:77px,77px,47px,47px;" data-text="w:normal;s:14,14,8,8;l:25,25,15,15;fw:700;" data-vbility="t,t,f,t" data-basealign="slide" data-padding="t:10,10,6,6;r:14,14,9,9;b:10,10,6,6;l:14,14,9,9;" data-border="bor:100%,100%,100%,100%;" data-frame_999="o:0;st:w;" style="z-index:7;background-color:#4989fd;font-family:Nunito Sans;">FB </a><a id="slider-1-slide-1-layer-13" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="button" data-rsp_ch="on" data-xy="x:r;xo:45px,45px,28px,28px;y:b;yo:76px,76px,47px,47px;" data-text="w:normal;s:14,14,8,8;l:25,25,15,15;fw:700;" data-vbility="t,t,f,t" data-basealign="slide" data-padding="t:10,10,6,6;r:15,15,9,9;b:10,10,6,6;l:15,15,9,9;" data-border="bor:100%,100%,100%,100%;" data-frame_999="o:0;st:w;" style="z-index:7;background-color:#4989fd;font-family:Nunito Sans;">IN </a>
                                    <rs-layer id="slider-1-slide-1-layer-14" data-type="text" data-color="#adadc1" data-rsp_ch="on" data-xy="xo:90px,90px,56px,56px;y:b;yo:90px,90px,56px,56px;" data-text="w:normal;s:14,14,8,8;l:25,25,15,15;fw:700;a:center;" data-vbility="t,t,f,t" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Nunito Sans;"> Have questions? </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-15" data-type="text" data-color="#4989fd" data-rsp_ch="on" data-xy="xo:90px,90px,56px,56px;y:b;yo:70px,70px,43px,43px;" data-text="w:normal;s:17,17,10,10;l:25,25,15,15;fw:700;" data-vbility="t,t,f,t" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:5;font-family:Nunito Sans;"> +32 540 200 7575 </rs-layer>
                                    <rs-layer id="slider-1-slide-1-layer-18" data-type="image" data-rsp_ch="on" data-xy="xo:50px,50px,31px,31px;y:b;yo:70px,70px,43px,43px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-dim="w:31px,31px,18px,18px;h:42px,42px,25px,25px;" data-vbility="t,t,f,t" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:8;"><img src="images/agency4-home-splash-icon.png" width="34" height="45"> </rs-layer>
                                </rs-slide>
                            </rs-slides>
                        </rs-module>
                    </rs-module-wrap>
                </div>
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
							<div class="image_wrapper"><img class="scale-with-grid" src="images/Logo.png" alt="Logo" width="207" height="50"> </div>
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
						<h6>Website</h6><a href="about.html" style="color:inherit">About Us</a>
						<br> <a href="#" style="color:inherit">Privacy Policy</a>
						<br> <a href="about.html" style="color:inherit">Our Team</a>
						<br> <a href="contact.html" style="color:inherit">Contact</a> </div>
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 70px"> </div>
				</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one"> <a id="back_to_top" class="footer_button" href><i class="icon-up-open-big"></i></a>
						<div class="copyright"> &copy; 2021 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="https://1.envato.market/9ZxXY">BeantownThemes</a> </div>
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
