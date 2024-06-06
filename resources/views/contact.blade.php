@extends('layouts.app')
@section('content')
<div class="section mcb-section full-width mt-80" style="padding-top:125px;padding-bottom:125px;background-image:url('images/slider-image.jpg');background-repeat:no-repeat; background-size:cover;background-position:center -367px;">
	<div class="container">
		<div class="row" style="padding:30px 0 0 12%">
			<div class="col-12">
				<h2 class="text-center">
					<span style="color: #fff;">Drop Us A Line</span>
				</h2>
				<hr class="no_line" style="margin: 0 auto 15px auto">
				<p style="color:#fff; font-size: 20px;" class="text-center"> 
					Contact us about anything related to our company or services. We'll get back to you as soon as possible.
				</p>
			</div>
		</div>
	</div>
</div>
<div class="section" style="padding-top:25px;padding-bottom:50px">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center" style="padding:0px 0px 0px 0px">
				<hr class="no_line" style="margin: 0 auto 50px auto">
				<h2>
					<span style="color: #4989fd;">Get In Touch With Us</span>					
				</h2>
				<hr class="no_line" style="margin: 0 auto 20px auto">
				<p style="color: #ADADC1;"> 
					Please contact us using the information below.
				</p>
			</div>
			<div class="col-12">
				<hr class="no_line" style="margin:0 auto 20px"> </div>
			<div class="col-md-4">
				<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
					<div class="image_wrapper"><img class="scale-with-grid" src="{{ asset('images/agency4-contact-icon3.png')}}" alt="agency4-contact-icon3" width="105" height="769"> </div>
				</div>
				<div class="column_attr clearfix align_center" style="padding:0% 18% 0% 18%;">
					<p style="color:#4962FD;font-weight: bold;"> ffice </p>
					<p> 
						<span style="color: #4e579b;">
							MASA Business - Telecom and Information Technology Building No.3348
							Makkah Street Al Dana District
							PO.Box 35514 - 9174
						</span> 
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
					<div class="image_wrapper"><img class="scale-with-grid" src="{{ asset('images/agency4-contact-icon2.png')}}" alt="agency4-contact-icon2" width="105" height="769"> </div>
				</div>
				<div class="column_attr clearfix align_center" style="padding:0% 18% 0% 18%;">
					<p style="color:#4962FD;font-weight: bold;"> Call Us </p>
					<p> 
						<span style="color: #4e579b;">
							+9123456789
						</span>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
					<div class="image_wrapper"><img class="scale-with-grid" src="{{ asset('images/agency4-contact-icon1.png')}}" alt="agency4-contact-icon1" width="105" height="769"> </div>
				</div>
				<div class="column_attr clearfix align_center" style="padding:0% 18% 0% 18%;">
					<p style="color:#4962FD;font-weight: bold;"> Send Us </p>
					<p>
						<span style="color: #4e579b;">
							info@masabusiness.com
						</span> 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section mcb-section bg-cover bg-cover" style="padding-top:80px;padding-bottom:35px;background-image:url('images/agency4-home-offer-bg.jpg');background-repeat:no-repeat;background-position:center;background-attachment:fixed;background-size:cover">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="column_attr clearfix align_center">
					<h2>
						<span style="color: #4989fd;">Fill the form</span>
						<br>
						<span style="color: #fff;">to contact us quickly</span>
					</h2> 
				</div>
			</div>
			<div class="col-12">
				<hr class="no_line" style="margin:0 auto 20px"> 
			</div>			
			<div class="col-12">
				<hr class="no_line" style="margin:0 auto 20px"> </div>
			<div class="col-12 text-center">
				<div class="column_attr clearfix align_center mobile_align_center" style="padding:0px 14%;">
					<div id="contactWrapper">
						<div id="contactform">
							<form method="post" id="reused_form">
								<!-- One Second (1/2) Column -->
								<div class="column one-second">
									<input placeholder="Your name" id="name" type="text" name="Name" required maxlength="50"> </div>
								<!-- One Second (1/2) Column -->
								<div class="column one-second">
									<input placeholder="Your e-mail" id="email" type="email" name="Email" required maxlength="50"> </div>
								<div class="column one">
									<input placeholder="Subject" id="subject" type="text" name="Subject" maxlength="50"> </div>
								<div class="column one">
									<textarea placeholder="Message" id="message" name="Message" rows="10" maxlength="6000" required></textarea>
								</div>
								<div class="column one">
									<button class="button-primary" id="submit" type="submit">Send A Message</button>
								</div>
							</form>
							<div id="success_message" style="display:none">
								<h3>Submitted the form successfully!</h3>
								<p>We will get back to you soon.</p>
							</div>
							<div id="error_message" style="width:100%; height:100%; display:none;">
								<h3>Error</h3> Sorry there was an error sending your form.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection