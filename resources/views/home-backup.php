<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/favicon.png">
		<title>box12</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/line-awesome.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">		
		<link rel="stylesheet" href="css/flexslider.css">
		<link rel="stylesheet" href="css/flexslider-rtl.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
		<!-- loader -->
		<div class="loader">
			<div class="loading">
				<div class="spinner-grow aloader" role="status">
					<span class="sr-only"></span>
				</div>
			</div>
		</div>
		<!-- end loader -->

		<!-- navbar -->
		<div id="navbar" class="navbar navbar-expand-lg justify-content-center align-items-center navbar-fixed">
			<div class="container">
				 <a href="{{route('home')}}" class="navbar-brand"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <i class="la la-bars"></i>
			    </button>

			    <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
			    	<ul class="navbar-nav nav">
						<li class="nav-item"><a class="nav-link" href="{{route('home')}}">{{__('Home')}}</a></li>			
						<li class="nav-item"><a class="nav-link" href="#about">{{__('about BOX12?')}}</a></li>
						<li class="nav-item"><a class="nav-link" href="#subscriptions">{{__('subscriptions')}}</a></li>
						<li class="nav-item"><a class="nav-link" href="#workouts">{{__('Our Workouts')}}</a></li>
						<li class="nav-item"><a class="nav-link" href="#group_exercise">{{__('group exercise')}}</a></li>							
						<li class="nav-item"><a class="nav-link" href="{{route('policy')}}">{{__('Policy')}}</a></li>
					</ul>
			    </div>					
					@include('partials/language_switcher')
			    <button class="button">{{__('Join Now')}}</button>					
					<!-- <p> {{__('Welcome to our website!')}}</p> -->					
			</div>
		</div>
		<!-- end navbar -->

		<!-- intro -->
		<div id="home" class="intro">
			<div class="container">
				<div class="content">
					<div class="row align-items-center">
						<div class="col-md">
							<div class="content-text">
								<span>{{__('Fitness and gym center')}}</span>
								<h1>{{__('Make your body healthy and muscular')}}</h1>
								<div class="entry" style="display: none;">
									<p>{{__('Coming soon')}}</p>
									<button class="button">{{__('Get Started')}}</button>
								</div>
								</ul>
							</div>
						</div>
						<div class="col-md">
							<div class="content-image">
								<img src="img/intro.png" alt="" class="h-50">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end intro -->

		<!-- about -->
		<div id="about" class="about">
			<div class="container">
				<h2>{{__('we_are_here_improve')}}</h2>
				<div class="row g-5">
					<div class="col-md-6">
						<div class="content-left">
							<img src="img/about.png" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="content-right">
							<img src="img/about2.png" alt="">							
						</div>
					</div>
				</div>				
			</div>
			<div class="container about-container">
				<div class="about-body-container">
					<div class="row mt-4 mb-4 mt-sm-2">
						<div class="col-md-4 ">
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon flex mx-auto mb-20">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
										<path d="M76.1,40.4C84,41.7,90,49,90,57.9c0,8.6-5.6,15.8-13.2,17.3v7c0,1.1-0.7,2.1-1.7,2.5c-0.3,0.1-0.7,0.2-1,0.2 c-0.7,0-1.4-0.3-2-0.8l-8.2-8.5h-4.1c-6,0-11.3-3.5-14.2-8.8l0.8-0.8h4.2c12.7,0,23.4-9.8,25.3-23.2C76,41.9,76.1,41.2,76.1,40.4
										M72.3,38.6c0,1.1-0.1,2.3-0.3,3.6C70.3,53.7,61.3,62,50.5,62h-5.8L33.4,73.8c-0.6,0.6-1.4,1-2.3,1c-0.4,0-0.8-0.1-1.2-0.2 c-1.2-0.5-2-1.7-2-3v-9.9c-10.3-1.9-18-11.5-18-23.1c0-12.9,9.8-23.5,21.7-23.5h18.8C62.5,15.1,72.3,25.6,72.3,38.6z M45.6,44.9
										c0-0.9-0.7-1.6-1.6-1.6H25.7c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6H44C44.9,46.5,45.6,45.8,45.6,44.9z M57.8,32.9 c0-0.9-0.7-1.6-1.5-1.6H25.7c-0.9,0-1.6,0.7-1.6,1.6s0.7,1.6,1.6,1.6h30.6C57.1,34.6,57.8,33.8,57.8,32.9z"></path>
									</svg>
								</div>
								<p class="text-white">
									{{__('You_will_be_guided_exercises')}}
								</p>	
							</div>																							
						</div>
						<div class="col-md-4">
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon flex mx-auto mb-20">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
										<path d="M50,83.5c-14.4,0-26.1-11.7-26.1-26.1S35.6,31.3,50,31.3S76.1,43,76.1,57.4S64.4,83.5,50,83.5 M72.7,34.1c2,0,2.1,0,2.2,0  c0.3-0.1,0.7-0.2,0.9-0.5l4.4-4.4c0.3-0.3,0.4-0.6,0.5-0.9c0.1-0.4,0-0.8-0.3-1.1L75.2,22c-0.2-0.2-0.5-0.4-0.9-0.4h-0.2  c-0.3,0.1-0.7,0.2-0.9,0.5l-4.4,4.4c-0.3,0.3-0.4,0.6-0.5,0.9c0,0.1,0,0.2,0,3c-3.9-2.6-8.2-4.4-12.8-5.1V20h1.9  c0.4,0,0.7-0.1,1-0.3c0.4-0.3,0.6-0.6,0.6-1v-7.3c0-0.4-0.2-0.8-0.6-1c-0.3-0.2-0.6-0.3-1-0.3H42.7c-0.4,0-0.7,0.1-1,0.3  c-0.4,0.3-0.6,0.6-0.6,1v7.3c0,0.4,0.2,0.8,0.6,1c0.3,0.2,0.6,0.3,1,0.3h1.9v5.3C29,27.9,17.4,41.6,17.4,57.4C17.4,75.4,32,90,50,90  s32.6-14.6,32.6-32.6C82.6,48.6,79,40.2,72.7,34.1 M42.7,75.2L52,59.7c0.8-1.3,0.4-3-0.9-3.8c-0.6-0.4-1.4-0.5-2.1-0.3  c-0.7,0.2-1.3,0.6-1.7,1.2L38,72.3c-0.8,1.3-0.4,3,0.9,3.7C40.3,76.8,42,76.4,42.7,75.2"></path>
									</svg>
								</div>
								<p class="text-white">
									{{__('A_round_starts_every_minutes_round')}}
								</p>
							</div>							
						</div>
						<div class="col-md-4">
							<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
								<div class="icon flex mx-auto mb-20">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
										<path d="M78.1,21.1c0.5,0.5,0.8,1.2,0.8,3.1v28h-5.4V25.9h-9c-0.9,0-1.6-0.7-1.6-1.6v-8.9H26.8v36.7h-5.4V13.8  c0-2.6,1.2-3.8,2.7-3.8h41.6c0.7,0,1.4,0.3,1.9,0.8L78.1,21.1 M34.2,45.2h32.2c0.6,0,1.1-0.5,1.1-1.1S67,43,66.4,43H34.2  c-0.6,0-1.1,0.5-1.1,1.1C33.2,44.7,33.7,45.2,34.2,45.2 M34.2,35.1h32.2c0.6,0,1.1-0.5,1.1-1.1s-0.5-1.1-1.1-1.1H34.2  c-0.6,0-1.1,0.5-1.1,1.1C33.2,34.6,33.7,35.1,34.2,35.1 M35.8,68.6h-6.4c-0.9,0-1.7,0.8-1.7,1.7v6.3c0,0.9,0.8,1.7,1.7,1.7h6.4  c0.9,0,1.7-0.8,1.7-1.7v-6.3C37.5,69.4,36.8,68.6,35.8,68.6 M76.5,67.2h-7.6c-0.9,0-1.7,0.8-1.7,1.7v7.4c0,0.9,0.8,1.7,1.7,1.7h7.6  c0.9,0,1.7-0.8,1.7-1.7v-7.4C78.2,67.9,77.4,67.2,76.5,67.2 M60.8,76.2h-4.2c-0.9,0-1.7,0.8-1.7,1.7V82c0,0.9,0.8,1.7,1.7,1.7h4.2  c0.9,0,1.7-0.8,1.7-1.7v-4.1C62.5,77,61.7,76.2,60.8,76.2 M27,63.8c0.9,0,1.7-0.8,1.7-1.7V58c0-0.9-0.8-1.7-1.7-1.7h-4.2  c-0.9,0-1.7,0.8-1.7,1.7v4.1c0,0.9,0.8,1.7,1.7,1.7H27z M76.9,55.6h-1.7c-0.9,0-1.7,0.8-1.7,1.7V59c0,0.9,0.8,1.7,1.7,1.7h1.7  c0.9,0,1.7-0.8,1.7-1.7v-1.6C78.6,56.4,77.8,55.6,76.9,55.6 M71.4,84h-2.5c-0.9,0-1.7,0.8-1.7,1.7v2.5c0,0.9,0.8,1.7,1.7,1.7h2.5  c0.9,0,1.7-0.8,1.7-1.7v-2.5C73.1,84.8,72.3,84,71.4,84 M25.8,84.8H24c-0.9,0-1.7,0.8-1.7,1.7v1.8c0,0.9,0.8,1.7,1.7,1.7h1.8  c0.9,0,1.7-0.8,1.7-1.7v-1.8C27.5,85.6,26.7,84.8,25.8,84.8 M47.5,80h-1.8c-0.9,0-1.7,0.8-1.7,1.7v1.8c0,0.9,0.8,1.7,1.7,1.7h1.8  c0.9,0,1.7-0.8,1.7-1.7v-1.8C49.2,80.7,48.4,80,47.5,80 M67.2,55.6c0-0.9-0.8-1.7-1.7-1.7H61c-0.9,0-1.7,0.8-1.7,1.7v4.5  c0,0.9,0.8,1.7,1.7,1.7h4.6c0.9,0,1.7-0.8,1.7-1.7L67.2,55.6L67.2,55.6z M52.9,58.7h-10c-0.9,0-1.7,0.8-1.7,1.7v9.8  c0,0.9,0.8,1.7,1.7,1.7h10c0.9,0,1.7-0.8,1.7-1.7v-9.8C54.5,59.5,53.8,58.7,52.9,58.7"></path>
									</svg>
								</div>
								<p class="text-white">
									{{__('You_will_notice_calories')}}
								</p>
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button class="button">{{__('Contact Us')}}</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end about -->

		<!-- subscriptions -->
		<div id="subscriptions" class="pricing subscription" style="display: none;">
			<div class="container">
				<h2 class="custom-font45">{{__('subscriptions')}}</h2>  
				<div class="divider"></div>    
				<div class="row g-5">
					<div class="col-md">
						<div class="content">
							<h2 class="m-0">3 Months</h2>
							<h3 class="custom-color2">$1449</h3>			
							<ul class="mt-20 mb-20">
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>									
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>									
							</ul>							
							<button class="button text-uppercase mb-2 mt-20">Buy now</button>							
						</div>
					</div>
					<div class="col-md">
						<div class="content">
							<h2 class="m-0">6 Months</h2>
							<h3 class="custom-color2">$2650</h3>			
							<ul class="mt-20 mb-20">
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>									
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>									
							</ul>							
							<button class="button text-uppercase mb-2 mt-20">Buy now</button>							
						</div>
					</div>
					<div class="col-md">
						<div class="content">
							<h2 class="m-0">12 Months</h2>
							<h3 class="custom-color2">$4500</h3>			
							<ul class="mt-20 mb-20">
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>									
								<li><i class="la la-check-circle"></i> Expires after 90 days</li>									
							</ul>							
							<button class="button text-uppercase mb-2 mt-20">Buy now</button>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end subscription -->

		<!-- start workout section -->
		<div id="workouts" class="workouts pt-30">
			<div class="container">
				<h2 class="custom-font45">{{__('Our Workouts')}}</h2>  
				<div class="divider"></div>        
				<div class="why-content-box mx-auto">
					<div class="section-title text-center">						
						<h3 class="text-center white">
							{{__('Our_exercises_are_UK')}}
						</h3>
					</div>					
				</div>
				<!-- workout explain -->
				<div class="pt-md-60 pt-30 workout_container">
					<div class="flexslider">
						<ul class="slides">
							<li>  	    	    
								<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
									<div class="icon flex mx-auto mb-20">						
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve">
											<path d="M187.1,239.6c-2.3,0-4.3-1.9-4.3-4.2v-0.2c0-2.3,1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3v0.1C191.4,237.6,189.5,239.6,187.1,239.6z M211.9,206.2c-11.6,0-22.2,7-26.7,17.7c-0.9,2.1,0.1,4.6,2.2,5.5c1.1,0.4,2.2,0.4,3.2,0c1.1-0.4,1.9-1.3,2.3-2.3 c3.2-7.6,10.6-12.5,18.9-12.5c11.3,0,20.5,9.2,20.5,20.5s-9.2,20.5-20.5,20.5c-7.9,0-15.1-4.6-18.5-11.6c-1-2.1-3.6-3-5.7-2 c-2.1,1-3,3.6-2,5.7c2.3,4.8,6,8.9,10.5,11.9c4.6,3,10.1,4.6,15.6,4.6c16,0,29-13,29-29C240.8,219.2,227.8,206.2,211.9,206.2z M245.3,162.9c2.3,3.5,2.8,8,1.2,11.9l-3.4,8.2c-0.8,1.9-2.2,3.3-4.1,4c-0.9,0.4-1.8,0.5-2.8,0.5s-2.1-0.2-3-0.6 c-6.7-2.9-13.9-4.5-21.4-4.5c-7.4,0-14.7,1.5-21.4,4.5c-1.8,0.8-3.9,0.9-5.8,0.1c-1.9-0.7-3.3-2.2-4.1-4l-3.4-8.2 c-1.6-3.9-1.2-8.4,1.2-11.9c2.3-3.5,6.3-5.6,10.5-5.6h45.8C239,157.3,242.9,159.4,245.3,162.9z M238.3,167.6 												c-0.8-1.2-2.1-1.9-3.5-1.9H189c-1.4,0-2.7,0.7-3.5,1.9c-0.8,1.2-0.9,2.6-0.4,3.9l2.9,7.2c7.5-3.2,15.6-4.8,23.8-4.8
												c8.2,0,16.3,1.6,23.8,4.8l2.9-7.2C239.1,170.2,239.1,168.8,238.3,167.6z M273.1,235.2c0,8.5-1.7,16.6-5,24.3 c-3.2,7.4-7.9,14-13.7,19.8c-2.9,2.7-6.5,4.2-10.5,4.2h-64.1c-3.9,0-7.6-1.5-10.5-4.2c-5.9-5.6-10.5-12.2-13.7-19.8
												c-3.3-7.7-5-15.9-5-24.3c0-15.5,5.8-30.2,16.3-41.6c0.5-0.5,0.6-1.3,0.4-2.1l-7.2-19c-2.6-6.8-1.6-14.3,2.5-20.3 c4.1-5.9,10.9-9.5,18.1-9.5h62.3c7.2,0,13.9,3.6,18.1,9.5c4.1,5.9,5,13.5,2.5,20.3l-7.2,19c-0.3,0.7-0.1,1.5,0.4,2.1
												C267.3,204.9,273.1,219.7,273.1,235.2z M264.5,235.2c0-13.3-5-26-14-35.8c-2.7-2.9-3.5-7.1-2.1-10.9l7.2-19 c1.6-4.2,1.1-8.8-1.5-12.4c-2.6-3.7-6.6-5.8-11.1-5.8h-62.3c-4.5,0-8.5,2.1-11.1,5.8c-2.6,3.7-3.1,8.2-1.5,12.4l7.2,19
												c1.4,3.8,0.6,8-2.1,10.9c-9,9.8-14,22.5-14,35.8c0,14.5,5.7,27.9,16.1,37.9c1.3,1.2,2.9,1.9,4.6,1.9h64.1c1.7,0,3.3-0.6,4.6-1.9l0,0 C258.8,263.1,264.5,249.6,264.5,235.2z"/>
											<path d="M78.8,248.8c-34.9,0-63.3-28.4-63.3-63.3c0-35.4,29-91.7,63.3-91.7s63.3,56.3,63.3,91.7C142.1,220.4,113.7,248.8,78.8,248.8 M78.8,71.5L92,88.1c-4.3-1.5-8.7-2.3-13.2-2.3s-8.9,0.9-13.2,2.3L78.8,71.5z M109.6,98.3c-0.1-0.7-0.3-1.4-0.8-2l-26-32.8V4
												c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4v59.6l-26,32.8c-0.5,0.6-0.7,1.3-0.8,2c-24,19.7-40.6,58.8-40.6,87.2c0,39.3,32,71.3,71.3,71.3 s71.3-32,71.3-71.3C150.2,157.2,133.6,118,109.6,98.3"/>
										</svg>												
									</div> 
									<p class="text-white">
										{{__('Our_training_environment_trainers')}}
									</p>
								</div>
							</li>
							<li>
								<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
									<div class="icon flex mx-auto mb-20">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
											<path d="M54,88.3c-1.6,0-2.9-1.1-3.3-2.6L38.2,29.5l-7.5,29.3c-0.4,1.5-1.7,2.5-3.3,2.5h-14c-1.9,0-3.4-1.5-3.4-3.4s1.5-3.4,3.4-3.4  h11.5l10.3-40.4c0.4-1.5,1.7-2.6,3.3-2.5c1.6,0,2.9,1.1,3.2,2.6l12.1,54.4L60,37.8c0.3-1.4,1.4-2.5,2.9-2.7c1.4-0.2,2.8,0.6,3.4,1.9  l7.4,15.4h12.9c1.9,0,3.4,1.5,3.4,3.4s-1.5,3.4-3.4,3.4h-15c-1.3,0-2.5-0.7-3-1.9l-4-8.2l-7.3,36.7C57,87.2,55.6,88.3,54,88.3  L54,88.3z"></path></svg>
									</div>								
									<p class="text-white">
										{{__('Organized_time-efficient_enthusiasm')}}
									</p>
								</div>
							</li>
							<li>
								<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
									<div class="icon flex mx-auto mb-20">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
											<path d="M57,54.3l5.9,9.4h4.9l-8.4-13.2L57,54.3z M45.6,36.3L52.3,47l2.4-3.9l-4.3-6.8H45.6z M61.4,36.3L55.9,45l0,0l-4.7,7.5l0,0  l-7.1,11.2h4.5l7.1-11.3v0l2.4-3.8l0,0L66,36.3H61.4z M35.8,51.9l1.1-2.5c0.5-1.2,1-2.9,1-3c0,0.2,0.5,1.9,1,3l1.1,2.5H35.8z   M30.4,57h3.3l0.9-2.3h6.5L42,57h3.6L38,40.2h-0.3L30.4,57z M10,57h3.3v-6.3c0-1.1-0.1-2.9-0.1-2.9s1,1.5,1.8,2.4l3.3,3.7h0.3  l3.3-3.7c0.8-0.9,1.8-2.4,1.8-2.4s-0.1,1.8-0.1,2.9V57h3.3V40.2h-0.3l-8.1,9l-8.2-9H10V57z M77.3,57h12.6v-3h-4.6  c-0.6,0-1.4,0.1-1.4,0.1s0.7-0.5,1.2-1l2.1-2.2c1.9-2,2.8-3.7,2.8-5.5c0-3.1-2.2-5.3-5.7-5.3c-3.6,0-5.8,2.2-6.5,5.2l3.5,0.7  c0.5-1.6,1.5-2.7,3-2.7c1.5,0,2.2,1,2.2,2.2c0,1.1-0.5,2.2-2.3,4.1l-6.9,7.2V57z M70.7,57h3.5V40.4h-6.4v3.1h3V57z"></path>
										</svg>
									</div>								
									<p class="text-white">
										{{__('A_club_technologies')}}
									</p>
								</div>
							</li>
							<li>
								<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
									<div class="icon flex mx-auto mb-20">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
										<path d="M76.1,40.4C84,41.7,90,49,90,57.9c0,8.6-5.6,15.8-13.2,17.3v7c0,1.1-0.7,2.1-1.7,2.5c-0.3,0.1-0.7,0.2-1,0.2 c-0.7,0-1.4-0.3-2-0.8l-8.2-8.5h-4.1c-6,0-11.3-3.5-14.2-8.8l0.8-0.8h4.2c12.7,0,23.4-9.8,25.3-23.2C76,41.9,76.1,41.2,76.1,40.4
										M72.3,38.6c0,1.1-0.1,2.3-0.3,3.6C70.3,53.7,61.3,62,50.5,62h-5.8L33.4,73.8c-0.6,0.6-1.4,1-2.3,1c-0.4,0-0.8-0.1-1.2-0.2 c-1.2-0.5-2-1.7-2-3v-9.9c-10.3-1.9-18-11.5-18-23.1c0-12.9,9.8-23.5,21.7-23.5h18.8C62.5,15.1,72.3,25.6,72.3,38.6z M45.6,44.9
										c0-0.9-0.7-1.6-1.6-1.6H25.7c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6H44C44.9,46.5,45.6,45.8,45.6,44.9z M57.8,32.9 c0-0.9-0.7-1.6-1.5-1.6H25.7c-0.9,0-1.6,0.7-1.6,1.6s0.7,1.6,1.6,1.6h30.6C57.1,34.6,57.8,33.8,57.8,32.9z"/>
									</svg>

									</div> 
									<p class="text-white">
										{{__('The_enthusiastic_goals')}}
									</p>
								</div>
							</li>
							<li>
								<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
									<div class="icon flex mx-auto mb-20">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve">
											<style type="text/css">
												.st0{fill:#B89F65;}
											</style>
											<path class="st0" d="M199.5,131.2C199.5,131.2,199.5,131.1,199.5,131.2C199.5,131.1,199.5,131.1,199.5,131.2 M199.5,131.1 c0,0,0-0.1,0-0.2C199.5,131,199.5,131,199.5,131.1 M199.5,130.7c0-0.1,0-0.1,0-0.2C199.5,130.5,199.5,130.6,199.5,130.7
												M199.5,130.5C199.5,130.5,199.5,130.4,199.5,130.5C199.5,130.4,199.5,130.5,199.5,130.5 M199.5,130.9L199.5,130.9L199.5,130.9z M199.5,130.9c0-0.1,0-0.2,0-0.2S199.5,130.8,199.5,130.9 M199.5,130.4C199.5,130.3,199.5,130.3,199.5,130.4 M141.5,144.9h-25.2
												l24.3-36.9v-1.6h-31.7v5.2h22.3l-24.3,37v1.5h34.6V144.9z M228.9,122.5c0-5.4-1.1-9.6-3.4-12.4c-2.2-2.7-5.5-4-10.3-4 c-1.3,0-2.4,0.1-3.5,0.4s-2.2,0.7-3.2,1.2s-1.9,1-2.7,1.6s-1.6,1.3-2.2,2l-2.8,2.9v-7h-6.6v43h6.3v-32.4l0.5-0.5
												c0.7-0.7,1.5-1.6,2.4-2.3c0.9-0.7,1.8-1.3,2.8-1.8c1-0.6,2.2-1,3.3-1.4c1.2-0.4,2.5-0.5,3.7-0.5c3,0,5.4,1.2,7,3.4 c1.4,2.1,2.1,4.9,2.1,8.6v27h6.4v-27.8H228.9z M266.3,125l-0.1-1.8c-0.2-3.8-1.3-6.8-3.3-8.9s-4.8-3.2-8.3-3.2c-3.6,0-6.7,1-9,3.1
												c-2.3,2-3.9,5-4.6,8.8l-0.4,2.1L266.3,125L266.3,125z M272.3,129.3h-31.7l0.2,1.9c0.2,2.1,0.7,4,1.5,5.8s1.9,3.4,3.3,4.7 c1.4,1.3,3,2.3,4.9,3c2.9,1.1,6.3,1.4,10.2,0.7c1.4-0.3,2.9-0.6,4.3-1.1s2.9-1.1,4.4-1.8c0.5-0.2,1-0.5,1.5-0.8v4.3
												c-2.2,1.3-4.5,2.3-6.8,3c-2.7,0.8-5.7,1.2-9.2,1.2c-3.1,0-5.9-0.5-8.4-1.5c-2.4-1-4.5-2.4-6.2-4.3c-1.7-1.9-3-4.2-4-6.9 c-0.9-2.8-1.4-6-1.4-9.5c0-3.3,0.5-6.3,1.5-9s2.3-5,4-6.8c1.7-1.9,3.8-3.3,6.2-4.3s5.2-1.6,8.2-1.6c2.9,0,5.5,0.5,7.7,1.4
												c2.1,0.9,4,2.2,5.4,3.9c1.5,1.7,2.6,3.8,3.3,6.3c0.8,2.6,1.2,5.5,1.2,8.7v2.7H272.3z M90.3,158.5l-4.7,19h32l4.7-19H90.3z M127.3,158.5l-4.7,19h32l4.7-19H127.3z M164.2,158.5l-4.7,19h32l4.7-19H164.2z M201,158.5l-4.7,19h32l4.7-19H201z M238,158.5
												l-4.7,19h32l4.7-19H238z M57.6,110.3c-2.1-2.8-5.3-4.1-9.8-4.1c-1.2,0-2.4,0.2-3.6,0.6c-1.2,0.4-2.4,1-3.6,1.6 c-1.1,0.7-2.2,1.4-3.2,2.3s-2,1.8-2.8,2.6l-1.8,1.9l-1.1-2.4c-1-2.1-2.3-3.7-4.2-4.9c-1.8-1.2-4.2-1.8-7.1-1.8
												c-1.1,0-2.2,0.2-3.2,0.4c-1.1,0.3-2.1,0.7-3.1,1.2s-1.8,1-2.6,1.6c-0.8,0.7-1.6,1.3-2.3,2L6.4,114v-6.8H0v43h6.3v-32.6l0.5-0.5 c0.6-0.6,1.3-1.2,2-1.9c0.8-0.7,1.7-1.3,2.7-1.9s2.1-1.1,3.2-1.5c1.2-0.4,2.5-0.6,3.7-0.6c2.9,0,5.2,1.2,6.7,3.4
												c1.4,2.1,2,4.9,2,8.5v27H31h2.5v-27.3v-4.7l0.1-0.1c0.5-0.7,1.2-1.4,2-2.2c0.8-0.8,1.7-1.5,2.8-2.2c1-0.7,2.2-1.2,3.3-1.7 c1.3-0.5,2.6-0.7,4-0.7c2.8,0,5.1,1.2,6.6,3.4c1.4,2.1,2,4.9,2,8.5v27h6.4v-27.3C60.9,117.4,59.8,113.2,57.6,110.3 M96.8,106.5
												l-12.6,36.2l-3.3-9.3l-9.4-26.9h-7.1c2.6,6.7,5.4,13.6,8.1,20.4c3.1,7.8,6.1,15.4,9.1,22.9l0.2,0.6l-0.2,0.6 c-0.9,2.8-1.7,5.3-2.4,7.5c-0.7,2.2-1.4,4.5-2.1,6.7s-1.3,4.5-1.9,6.8c-0.4,1.7-0.9,3.5-1.3,5.5h6.6c0.5-2.4,1.1-4.9,1.7-7.4
												c0.7-3,1.5-5.9,2.2-8.9c0.8-3,1.5-5.8,2.2-8.3c0.7-2.6,1.4-4.7,2-6.4l14.8-40L96.8,106.5L96.8,106.5z M168.8,133.8l-2.7-12.1 l-4.5,11.9c-1.8,3.6-4.1,0.3-4.1,0.3l-2.2-3.5l-5.5,12.3c4,4.8,9.9,7.9,16.4,7.9c9.5,0,17.6-6.4,20.5-15.2h-15.9
												C169.2,135.4,168.8,133.8,168.8,133.8 M155.4,125.1c1.1,0,1.9,1.4,1.9,1.4l1.8,3.7l5.1-13.1c0,0,0.3-1.6,2.1-1.6s2.1,1.8,2.1,1.8 l3.8,14.9h15.3c0.2-1.2,0.3-2.5,0.3-3.8c0-12.3-9.7-22.3-21.6-22.3c-11.9,0-21.6,10-21.6,22.3c0,4.1,1.1,8,3,11.3l6.2-13.6
												C153.8,126.1,154.3,125.1,155.4,125.1 M276.6,106.5c0-0.1,0-0.2,0-0.2c0-0.1,0-0.1,0-0.1v-0.1c0,0,0,0-0.1,0h-3.7h-0.1 c0,0,0,0,0,0.1v0.1c0,0.1,0,0.1,0,0.2s0,0.1,0,0.2s0,0.1,0,0.1v0.1c0,0,0,0,0.1,0h1.3v4.3v0.1c0,0,0,0,0.1,0.1c0,0,0.1,0,0.2,0
												s0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0-0.1v-4.3h1.3c0,0,0,0,0.1,0c0,0,0,0,0-0.1v-0.1 C276.6,106.6,276.6,106.5,276.6,106.5 M283.5,106.4c0-0.1,0-0.1,0-0.2s0-0.1-0.1-0.1l-0.1-0.1c-0.1,0-0.1,0-0.2,0h-0.7
												c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0.1-0.2,0.1s-0.1,0.1-0.1,0.2s-0.1,0.2-0.1,0.3l-1.2,3.2l0,0l-1.1-3.2c0-0.1-0.1-0.2-0.1-0.3 c0-0.1-0.1-0.1-0.2-0.2c-0.1,0-0.1-0.1-0.2-0.1s-0.2,0-0.3,0h-0.7c-0.1,0-0.2,0-0.3,0.1c-0.1,0.1-0.1,0.2-0.1,0.3v4.7v0.1
												c0,0,0,0,0.1,0.1c0,0,0.1,0,0.2,0s0.1,0,0.2,0s0.2,0,0.2,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0-0.1v-4.3l0,0l1.5,4.3v0.1 c0,0,0.1,0,0.1,0.1c0,0,0.1,0,0.2,0s0.1,0,0.2,0s0.2,0,0.2,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1l1.5-4.3l0,0
												v4.3v0.1c0,0,0,0,0.1,0.1c0,0,0.1,0,0.2,0s0.1,0,0.2,0s0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0-0.1v-4.7H283.5z"
											/>
										</svg>
									</div>	
									<p class="text-white">
										{{__('The_small_group_challenging_you')}} 
									</p>
								</div>
							</li>
							<li>
								<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">												
									<div class="icon flex mx-auto mb-20">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
											<path d="M78.1,21.1c0.5,0.5,0.8,1.2,0.8,3.1v28h-5.4V25.9h-9c-0.9,0-1.6-0.7-1.6-1.6v-8.9H26.8v36.7h-5.4V13.8  c0-2.6,1.2-3.8,2.7-3.8h41.6c0.7,0,1.4,0.3,1.9,0.8L78.1,21.1 M34.2,45.2h32.2c0.6,0,1.1-0.5,1.1-1.1S67,43,66.4,43H34.2  c-0.6,0-1.1,0.5-1.1,1.1C33.2,44.7,33.7,45.2,34.2,45.2 M34.2,35.1h32.2c0.6,0,1.1-0.5,1.1-1.1s-0.5-1.1-1.1-1.1H34.2  c-0.6,0-1.1,0.5-1.1,1.1C33.2,34.6,33.7,35.1,34.2,35.1 M35.8,68.6h-6.4c-0.9,0-1.7,0.8-1.7,1.7v6.3c0,0.9,0.8,1.7,1.7,1.7h6.4  c0.9,0,1.7-0.8,1.7-1.7v-6.3C37.5,69.4,36.8,68.6,35.8,68.6 M76.5,67.2h-7.6c-0.9,0-1.7,0.8-1.7,1.7v7.4c0,0.9,0.8,1.7,1.7,1.7h7.6  c0.9,0,1.7-0.8,1.7-1.7v-7.4C78.2,67.9,77.4,67.2,76.5,67.2 M60.8,76.2h-4.2c-0.9,0-1.7,0.8-1.7,1.7V82c0,0.9,0.8,1.7,1.7,1.7h4.2  c0.9,0,1.7-0.8,1.7-1.7v-4.1C62.5,77,61.7,76.2,60.8,76.2 M27,63.8c0.9,0,1.7-0.8,1.7-1.7V58c0-0.9-0.8-1.7-1.7-1.7h-4.2  c-0.9,0-1.7,0.8-1.7,1.7v4.1c0,0.9,0.8,1.7,1.7,1.7H27z M76.9,55.6h-1.7c-0.9,0-1.7,0.8-1.7,1.7V59c0,0.9,0.8,1.7,1.7,1.7h1.7  c0.9,0,1.7-0.8,1.7-1.7v-1.6C78.6,56.4,77.8,55.6,76.9,55.6 M71.4,84h-2.5c-0.9,0-1.7,0.8-1.7,1.7v2.5c0,0.9,0.8,1.7,1.7,1.7h2.5  c0.9,0,1.7-0.8,1.7-1.7v-2.5C73.1,84.8,72.3,84,71.4,84 M25.8,84.8H24c-0.9,0-1.7,0.8-1.7,1.7v1.8c0,0.9,0.8,1.7,1.7,1.7h1.8  c0.9,0,1.7-0.8,1.7-1.7v-1.8C27.5,85.6,26.7,84.8,25.8,84.8 M47.5,80h-1.8c-0.9,0-1.7,0.8-1.7,1.7v1.8c0,0.9,0.8,1.7,1.7,1.7h1.8  c0.9,0,1.7-0.8,1.7-1.7v-1.8C49.2,80.7,48.4,80,47.5,80 M67.2,55.6c0-0.9-0.8-1.7-1.7-1.7H61c-0.9,0-1.7,0.8-1.7,1.7v4.5  c0,0.9,0.8,1.7,1.7,1.7h4.6c0.9,0,1.7-0.8,1.7-1.7L67.2,55.6L67.2,55.6z M52.9,58.7h-10c-0.9,0-1.7,0.8-1.7,1.7v9.8  c0,0.9,0.8,1.7,1.7,1.7h10c0.9,0,1.7-0.8,1.7-1.7v-9.8C54.5,59.5,53.8,58.7,52.9,58.7"></path>
										</svg>
									</div>							
									<p class="text-white">
										{{__('Varied_experiences_week')}}
									</p>
								</div>
							</li>
						</ul>
					</div>			
				</div>
			</div>
		</div>
		<!-- end workout section -->

		<!-- group exercise -->
		<div id="group_exercise" class="group_exercise pt-30">
			<div class="container">
				<h2 class="custom-font45">{{__('GROUP EXERCISE')}}<br/> {{__('PROGRAMME')}}</h2>  
				<div class="divider"></div>  
				<div class="row pt-90">
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">ABS BLAST</h4>
							</div> 
							<p class="text-white">
								{{__('This_30_minute_workout_not-so-familiar_exercises')}}
							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">BODY FUSION</h4>
							</div> 
							<p class="text-white">
								{{__('Body_Fusion_will_define_every_inch_of_sense_well-being')}}
							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">META BOX</h4>
							</div> 
							<p class="text-white">
								{{__('This_new_high-energy_your_mind_every_inch_of_your_body')}}
							</p>
						</div>
					</div>						

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">HIIT</h4>
							</div> 
							<p class="text-white">
								{{__('Our_HIIT_workouts_alternate_our_HIIT_classes')}}
							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">LEGS BUMS & TUMS</h4>
							</div> 
							<p class="text-white">
								{{__('This_class_feeling_energised')}}
							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">STRETCH & RECOVERY</h4>
							</div> 
							<p class="text-white">
								{{__('How_often_mobility')}}									
							</p>
						</div>
					</div>	
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">LIFT</h4>
							</div> 
							<p class="text-white">
								{{__('In_this_functional_major_muscle_group')}}
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">BOX12BURNER</h4>
							</div> 
							<p class="text-white">
								{{__('This_small_group_circuit_whole_body')}}
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">HATTON BOXING CLASS</h4>
							</div> 
							<p class="text-white">
								{{__('Take_your_skills_fitness_and_coordination')}}
						</div>
					</div>	
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box text-center d-flex flex-column align-content-center flex-wrap">
							<div class="icon mb-20">
								<h4 class="custom-color2">STEP HIIT</h4>
							</div> 
							<p class="text-white">
								{{__('This_30_minute_improve_strength_exercises')}}
							</p>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- end group exercise -->	
		
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md col-sm-6">
						<ul>
							<li><a href=""><i class="la la-facebook"></i></a></li>
							<li><a href=""><i class="la la-twitter"></i></a></li>
							<li><a href=""><i class="la la-instagram"></i></a></li>
							<li><a href=""><i class="la la-youtube"></i></a></li>
						</ul>
					</div>
					<div class="col-md col-sm-6">
						<div class="cp">
							<span> {{__('copy_right')}} </span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
		<!-- scroll to top bar -->
		<a href="https://wa.me/966920015223?text=Can you help me with" class="scroll-to-top" target="_blank">
			<i class="lab la-whatsapp"></i>
		</a>
		<!-- script -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery.filterizr.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/magnific-popup.min.js"></script>		
		<script src="js/main.js"></script>		
	</body>
</html>