@extends('layouts.app') 
@section('header_slider') 
@endsection 
@section('content') 
<div class="section mcb-section full-width mt-80" style="padding-top:125px;padding-bottom:125px;background-image:url('images/slider-image.jpg');background-repeat:no-repeat; background-size:cover;background-position:center -367px;">
  <div class="row" style="padding:30px 16%">
    <div class="col-12">
      <h2>
        <span style="color: #fff;"> Professional Enterprise Applications for your Business </span>
      </h2>
      <hr class="no_line" style="margin: 0 auto 15px auto">
    </div>
  </div>
</div>
<div class="section" style="padding-top:70px;padding-bottom:70px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
          <div class="image_wrapper">
            <img class="scale-with-grid" src="{{ asset('images/about.png')}}" alt="agency4-home-whyus-people" width="494" height="874">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="padding:15px 15px 0px">
        <div class="column_attr clearfix align_left">
          <h2>
            <span style="color: #4989fd;">About Us</span>
          </h2>
          <hr class="no_line" style="margin: 0 auto 20px auto">
          <p style="color: #626262;"> MASA provides information technology and management consulting services. The Company offers systems integration and general information technology counselling services. MASA serves the government, ﬁnancial services, health, insurance and retail sectors. MASA offers a full range of advisory services, strategic business consulting, software development, systems integration, mobile applications and ecommerce. With a team of experienced and talented professionals, MASA has developed deep expertise in its targeted industries and has earned a reputation for delivering superior and reliable solutions that strengthen organizations’ operational performance. Our culture at MASA is based on deep and unwavering commitment to our clients’ needs. We strive to build long-term, trusting and loyal relationships with our clients and deliver tailored solutions and services to speciﬁcally ﬁt the needs of each client. </p>
          <hr class="no_line" style="margin: 0 auto 20px auto">
          <hr class="no_line" style="margin: 0 auto 40px auto">
          <a class="button button_size_2 button_dark" href="{{route('about_us')}}" style="color:#fff;">
            <span class="button_label">More about us</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section mcb-section bg-cover" style="padding-top:50px;padding-bottom:25px;background-image:url('images/agency4-home-offer-bg.jpg);background-repeat:no-repeat;background-position:center top;background-attachment:fixed">
  <div class="container">
    <div class="row" style="padding:0px 0px 0px 0px">
      <div class="col-12 text-center">
        <hr class="no_line" style="margin: 0 auto 50px auto">
        <h2>
          <span style="color: #4989fd;">Our Services</span>
        </h2>
        <hr class="no_line" style="margin: 0 auto 20px auto">
      </div>
      <div class="col-12">
        <hr class="no_line" style="margin:0 auto 30px">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="image_wrapper">
          <img class="scale-with-grid" src="{{ asset('images/agency4-home-services-icon2.png')}}" alt="agency4-home-services-icon2" width="105" height="780">
        </div>
        <hr class="no_line" style="margin:0 auto 40px">
        <p style="color:#fff"> Software Development and implementation </p>
        <p>
          <span style="color: #4e579b;">
          	MASA provides information technology and management consulting services. The Company offers systems integration and general information technology counselling services. MASA serves the government, ﬁnancial services, health, insurance and retail sectors.
          </span>
        </p>
      </div>
      <div class="col-md-4 text-center">
        <div class="image_wrapper">
          <img class="scale-with-grid" src="{{ asset('images/agency4-services-icon2.png')}}" alt="agency4-services-icon2" width="105" height="785">
        </div>
        <hr class="no_line" style="margin:0 auto 40px">
        <p style="color:#fff"> Networking and Security</p>
        <p>
          <span style="color: #4e579b;">
          	IT Infrastructure is the backbone of any enterprise. It is imperative that the IT infrastructure is carefully planned, deployed and maintained in order for the enterprise to function efficiently.
          </span>
        </p>
      </div>
      <div class="col-md-4 text-center">
        <div class="image_wrapper">
          <img class="scale-with-grid" src="{{ asset('images/agency4-services-icon3.png')}}" alt="agency4-services-icon3" width="105" height="785">
        </div>
        <hr class="no_line" style="margin:0 auto 40px">
        <p style="color:#fff"> Technical Consulting </p>
        <p>
          <span style="color: #4e579b;">
          	MASA provides advanced services in technical consulting to enable its customers adopt the latest and best software applications and IT solutions that keep pace with accelerated growth and progress in the ﬁeld of information technology, utilizing its featured experiences in cloud computing and management information systems (MIS).
          </span>
        </p>
      </div>
      <div class="col-md-4 text-center">
        <div class="image_wrapper">
          <img class="scale-with-grid" src="{{ asset('images/agency4-services-icon2.png')}}" alt="agency4-services-icon2" width="105" height="785">
        </div>
        <hr class="no_line" style="margin:0 auto 40px">
        <p style="color:#fff"> Mobile App Development</p>
        <p>
          <span style="color: #4e579b;">
          	Mobile technology is disrupting industry value chain across verticals. Nowadays, every business is being transformed to be online to get a competitive business advantage in its market. This is achieved through proper utilization of mobile apps. MASA has extensive hands-on experience in building and deploying cutting-edge mobile apps.
          </span>
        </p>
      </div>
      <div class="col-md-4 text-center">
        <div class="image_wrapper">
          <img class="scale-with-grid" src="{{ asset('images/agency4-services-icon3.png')}}" alt="agency4-services-icon3" width="105" height="785">
        </div>
        <hr class="no_line" style="margin:0 auto 40px">
        <p style="color:#fff"> Security Systems and Monitoring </p>
        <p>
          <span style="color: #4e579b;">
          	In line with the increasing demand and security awareness in various walks of life, MASA provides innovative solutions in building security systems with high quality and reliability
          </span>
        </p>
      </div>
      <div class="col-12">
        <hr class="no_line" style="margin:0 auto 40px">
      </div>
    </div>
    <div class="row" style="padding:0px 0px 55px 0px">
      <div class="col-12 text-center">
        <a class="button button_size_2" href="{{route('services')}}" style="background-color:#F74371!important;color:#fff;">
          <span class="button_label">See all services</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="section mb-4" style="padding-top:100px">
	<div class="container">
		<h2 class="text-center">
        	<span style="color: #4989fd;">Products</span>
      	</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="portfolio-item-fw-bg">
					<div class="portfolio-item-fill"></div>					
					<div class="image_frame scale-with-grid">
						<div class="image_wrapper">
							<a href="portfolio-item.html">
								<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Amwal-ERP-System-.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
							<div class="image_links double"> <a href="{{ asset('images/Amwal-ERP-System-.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="portfolio-item.html" class="link"><i class="icon-link"></i></a> </div>
						</div>
					</div>
					<div class="desc">
						<div class="title_wrapper">
							<h5 class="entry-title"><a class="link" href="portfolio-item.html">Amwal ERP System</a></h5>	
						</div>															
					</div>					
				</div>
			</div>
			<div class="col-md-4">
				<div class="portfolio-item-fw-bg">
					<div class="portfolio-item-fill"></div>					
					<div class="image_frame scale-with-grid">
						<div class="image_wrapper">
							<a href="portfolio-item.html">
								<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Fixed-Assets-Management-System-1.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
							<div class="image_links double"> <a href="{{ asset('images/Fixed-Assets-Management-System-1.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="portfolio-item.html" class="link"><i class="icon-link"></i></a> </div>
						</div>
					</div>
					<div class="desc">
						<div class="title_wrapper">
							<h5 class="entry-title">
								<a class="link" href="portfolio-item.html">Fixed Assets Management</a>
							</h5>					
						</div>															
					</div>					
				</div>
			</div>
			<div class="col-md-4">
				<div class="portfolio-item-fw-bg">
					<div class="portfolio-item-fill"></div>					
					<div class="image_frame scale-with-grid">
						<div class="image_wrapper">
							<a href="portfolio-item.html">
								<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Restaurant-Management-System.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
							<div class="image_links double"> <a href="{{ asset('images/Restaurant-Management-System.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="portfolio-item.html" class="link"><i class="icon-link"></i></a> </div>
						</div>
						<div class="desc">
						<div class="title_wrapper">
							<h5 class="entry-title">
								<a class="link" href="portfolio-item.html">
									Restaurant-Management-System.png
								</a>
							</h5>							
						</div>															
					</div>
					</div>					
				</div>
			</div>			
		</div>
		<div class="row mt-4">
			<div class="col-md-4">
				<div class="portfolio-item-fw-bg">
					<div class="portfolio-item-fill"></div>					
					<div class="image_frame scale-with-grid">
						<div class="image_wrapper">
							<a href="portfolio-item.html">
								<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Points-of-Sales-System-.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
							<div class="image_links double"> <a href="{{ asset('images/Points-of-Sales-System-.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="portfolio-item.html" class="link"><i class="icon-link"></i></a> </div>
						</div>
						<div class="desc">
							<div class="title_wrapper">
								<h5 class="entry-title">
									<a class="link" href="portfolio-item.html">Point of Sales System</a>
								</h5>							
							</div>															
						</div>
					</div>					
				</div>
			</div>
			<div class="col-md-4">
				<div class="portfolio-item-fw-bg">
					<div class="portfolio-item-fill"></div>					
					<div class="image_frame scale-with-grid">
						<div class="image_wrapper">
							<a href="portfolio-item.html">
								<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Human-Resources-System.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
							<div class="image_links double"> <a href="{{ asset('images/Human-Resources-System.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="portfolio-item.html" class="link"><i class="icon-link"></i></a> </div>
						</div>
						<div class="desc">
							<div class="title_wrapper">
								<h5 class="entry-title">
									<a class="link" href="portfolio-item.html">
										Human Resources System
									</a>
								</h5>							
							</div>															
						</div>
					</div>					
				</div>
			</div>
			<div class="col-md-4">
				<div class="portfolio-item-fw-bg">
					<div class="portfolio-item-fill"></div>					
					<div class="image_frame scale-with-grid">
						<div class="image_wrapper">
							<a href="portfolio-item.html">
								<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Banan-Plus-Payroll.jpg')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
							<div class="image_links double"> <a href="{{ asset('images/Banan-Plus-Payroll.jpg')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="portfolio-item.html" class="link"><i class="icon-link"></i></a> </div>
						</div>
						<div class="desc">
							<div class="title_wrapper">
								<h5 class="entry-title"><a class="link" href="portfolio-item.html">Personnel Management System (Banan Plus)</a></h5>							
							</div>															
						</div>
					</div>					
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

<script>
  var revapi1, tpj;

  function revinit_revslider11() {
    jQuery(function() {
      tpj = jQuery;
      revapi1 = tpj("#rev_slider_1_1");
      if (revapi1 == undefined || revapi1.revolution == undefined) {
        revslider_showDoubleJqueryError("rev_slider_1_1");
      } else {
        revapi1.revolution({
          sliderType: "hero",
          sliderLayout: "fullwidth",
          visibilityLevels: "1240,1240,778,778",
          gridwidth: "1240,1240,778,778",
          gridheight: "700,700,700,700",
          spinner: "spinner2",
          perspective: 600,
          perspectiveType: "global",
          editorheight: "700,768,700,720",
          responsiveLevels: "1240,1240,778,778",
          progressBar: {
            disableProgressBar: true
          },
          navigation: {
            onHoverStop: false
          },
          fallbacks: {
            allowHTML5AutoPlayOnAndroid: true
          },
        });
      }
    });
  }
  var once_revslider11 = false;
  if (document.readyState === "loading") {
    document.addEventListener('readystatechange', function() {
      if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
        once_revslider11 = true;
        revinit_revslider11();
      }
    });
  } else {
    once_revslider11 = true;
    revinit_revslider11();
  }
</script> @endsection