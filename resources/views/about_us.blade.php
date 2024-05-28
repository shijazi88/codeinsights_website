@extends('layouts.app')
@section('header_slider')
@endsection
@section('content')
	<div class="section mcb-section full-width mt-80" style="padding-top:125px;padding-bottom:125px;background-image:url('images/agency4-home-splash.jpg');background-repeat:no-repeat; background-size:cover;background-position:center">
		<div class="row" style="padding:30px 16%">
			<div class="col-12">
				<h2 class="text-center">
					<span style="color: #4989fd;">About us					
				</h2>								
			</div>
		</div>
	</div>
	<div class="section" style="padding-top:125px;padding-bottom:35px">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="column_attr clearfix align_center mobile_align_center">
						<h2><span style="color: #4989fd;">Unified Technology</h2> </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="column_attr clearfix" style="padding:40px 6%;">
						<p style="color:#ADADC1;"> 
							Masa provides information technology and management consulting services. The Company offers systems integration and general information technology counselling services. Masa serves the government, ﬁnancial services, health, insurance and retail sectors.
						</p>
						<p style="color:#ADADC1;">
							Masa offers a full range of advisory services, strategic business consulting, software development, systems integration, mobile applications and ecommerce.
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="column_attr clearfix" style="padding:40px 6%;">
						<p style="color:#ADADC1;">
							With a team of experienced and talented professionals, Masa has developed deep expertise in its targeted industries and has earned a reputation for delivering superior and reliable solutions that strengthen organizations’ operational performance.
						</p>
						<p style="color:#ADADC1;">
							Our culture at Masa is based on deep and unwavering commitment to our clients’ needs. We strive to build long-term, trusting and loyal relationships with our clients and deliver tailored solutions and services to speciﬁcally ﬁt the needs of each client.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
						<div class="image_wrapper">
							<img class="scale-with-grid" src="{{asset('images/about.png')}}" alt="agency4-aboutus-image" width="1024" height="423"> 

						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<div class="section flv_sections_6" id="start">
		<div class="section_wrapper clearfix">
			<div class="items_group clearfix">
				<!-- One Third (1/2) Column -->
				<div class="column one-second column_icon_box">
					<!-- Animated area -->
					<div class="animate" data-anim-type="fadeInLeftLarge">
						<div class="icon_box icon_position_top has_border">
							<a class="scroll" href="#thematic-websites">
								<div class="icon_wrapper">
									<div class="icon">
										<i class="icon-lightbulb-line"></i>
									</div>
								</div>
								<div class="desc_wrapper">
									<h4> INNOVATION</h4>
									<div class="desc">
										We believe in questioning the status quo.
										We believe in pushing the limits. We believe in changing the world through technology and desiag.
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- One Third (1/2) Column -->
				<div class="column one-second column_icon_box">
					<!-- Animated area -->
					<div class="animate" data-anim-type="zoomIn">
						<div class="icon_box icon_position_top has_border">
							<a  href="#">
								<div class="icon_wrapper">
									<div class="icon">
										<i class="icon-beaker-line"></i>
									</div>
								</div>
								<div class="desc_wrapper">
									<h4>AGILITY</h4>
									<div class="desc">
										Everything we craft is done iteratively with passion and honesty, using Agile Software Development Methodologies such as SCRUM and Extreme Programming.
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="section" style="padding-top:70px;padding-bottom:70px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
						<h3>Our Values</h3>
						<p>Proficiency and excellence in providing the latest business solutions and technologies as well as consultancy services with the highest level of experience.</p>
					</div>
				</div>
				<div class="col-md-6" style="padding:15px 15px 0px">
					<div class="column_attr clearfix align_left" style="padding:35px 0 0 0;">												
						<ul class="list_check">
							<li> Excellence and dedication to ensure the highest quality of technical development and support</li>
							<li> National responsibility. </li>
							<li> Cooperation and partnership. </li>
							<li> Creativity and continuous innovation.</li>
						</ul>						
					</div>
				</div>
			</div>
		</div>
	</div>	
@endsection

