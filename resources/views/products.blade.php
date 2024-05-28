@extends('layouts.app')
@section('content')
<div class="section mcb-section full-width mt-80" style="padding-top:125px;padding-bottom:125px;background-image:url('images/agency4-home-splash.jpg');background-repeat:no-repeat; background-size:cover;background-position:center">
	<div class="">
		<div class="row" style="padding:30px 16%">
			<div class="col-12">
				<h2 class="text-center"><span style="color: #fff;">Our Products</span></h2>
				<hr class="no_line" style="margin: 0 auto 15px auto">				
			</div>
		</div>
	</div>
</div>
<div class="section" style="padding-top:100px">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="portfolio_group lm_wrapper isotope col-2 masonry" style="max-width:100%;">
					<li class="portfolio-item isotope-item has-thumbnail">
						<div class="portfolio-item-fw-bg">
							<div class="portfolio-item-fill"></div>							
							<div class="image_frame scale-with-grid">
								<div class="image_wrapper">
									<a href="{{route('product_detail', ['name' => 'Amwal ERP'])}}">
										<div class="mask"></div>
										<img width="780" height="437" src="{{ asset('images/Amwal-ERP-System-.png')}}" class="scale-with-grid wp-post-image" loading="lazy">
									</a>
									<div class="image_links double"> 
										<a href="{{ asset('images/Amwal-ERP-System-.png')}}" class="zoom" rel="prettyphoto">
											<i class="icon-search"></i>
										</a>
										<a href="{{route('product_detail', ['name' => 'Amwal ERP'])}}" class="link">
											<i class="icon-link"></i>
										</a> 
									</div>
								</div>
							</div>
							<div class="desc">
								<div class="title_wrapper">
									<h5 class="entry-title"><a class="link" href="{{route('product_detail', ['name' => 'Amwal ERP'])}}">Amwal ERP System</a></h5>
									<div class="button-love"> 
										<a href="#" class="mfn-love" data-id="303">
											<span class="icons-wrapper">
												<i class="icon-heart-empty-fa"></i>
												<i class="icon-heart-fa"></i>
											</span>
											<span class="label">35</span>
										</a> 
									</div>
								</div>															
							</div>
						</div>
					</li>
					<li class="portfolio-item isotope-item has-thumbnail">
						<div class="portfolio-item-fw-bg">
							<div class="portfolio-item-fill"></div>
							<div class="list_style_header">
								<h3 class="entry-title">									
									<div class="links_wrapper"> 
										<a href="#" class="button the-icon portfolio_prev_js">
											<span class="button_icon">
												<i class="icon-up-open"></i>
											</span>
										</a>
										<a href="#" class="button the-icon portfolio_next_js">
											<span class="button_icon"><i class="icon-down-open"></i></span></a>
											<a href="{{route('product_detail', ['name' => 'Banan Plus Payroll'])}}" class="button button_theme has-icon">
											<span class="button_icon">
												<i class="icon-link"></i>
											</span>
											<span class="button_label">Read more</span>
										</a> 
									</div>
							</div>
							<div class="image_frame scale-with-grid">
								<div class="image_wrapper">
									<a href="{{route('product_detail', ['name' => 'Banan Plus Payroll'])}}">
										<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Banan-Plus-Payroll.jpg')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
									<div class="image_links double"> <a href="{{ asset('images/Banan-Plus-Payroll.jpg')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
										<a href="{{route('product_detail', ['name' => 'Banan Plus Payroll'])}}" class="link"><i class="icon-link"></i></a> </div>
								</div>
							</div>
							<div class="desc">
								<div class="title_wrapper">
									<h5 class="entry-title"><a class="link" href="{{route('product_detail', ['name' => 'Fixed Assets Management'])}}">Personnel Management System (Banan Plus)</a></h5>
									<div class="button-love"> 
										<a href="#" class="mfn-love" data-id="303">
											<span class="icons-wrapper">
												<i class="icon-heart-empty-fa"></i>
												<i class="icon-heart-fa"></i>
											</span>
											<span class="label">35</span>
										</a> 
									</div>
								</div>															
							</div>
						</div>
					</li>
					<li class="portfolio-item isotope-item has-thumbnail">
						<div class="portfolio-item-fw-bg">
							<div class="portfolio-item-fill"></div>
							<div class="list_style_header">
								<h3 class="entry-title">									
									<div class="links_wrapper"> 
										<a href="#" class="button the-icon portfolio_prev_js">
											<span class="button_icon">
												<i class="icon-up-open"></i>
											</span>
										</a>
										<a href="#" class="button the-icon portfolio_next_js">
											<span class="button_icon"><i class="icon-down-open"></i></span></a>
											<a href="{{route('product_detail', ['name' => 'Fixed Assets Management'])}}" class="button button_theme has-icon">
											<span class="button_icon">
												<i class="icon-link"></i>
											</span>
											<span class="button_label">Read more</span>
										</a> 
									</div>
							</div>
							<div class="image_frame scale-with-grid">
								<div class="image_wrapper">
									<a href="{{route('product_detail', ['name' => 'Fixed Assets Management'])}}">
										<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Fixed-Assets-Management-System-1.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
									<div class="image_links double"> <a href="{{ asset('images/Fixed-Assets-Management-System-1.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
										<a href="{{route('product_detail', ['name' => 'Fixed Assets Management'])}}" class="link"><i class="icon-link"></i></a> </div>
								</div>
							</div>
							<div class="desc">
								<div class="title_wrapper">
									<h5 class="entry-title"><a class="link" href="{{route('product_detail', ['name' => 'Fixed Assets Management'])}}">Fixed Assets Management System</a></h5>
									<div class="button-love"> 
										<a href="#" class="mfn-love" data-id="303">
											<span class="icons-wrapper">
												<i class="icon-heart-empty-fa"></i>
												<i class="icon-heart-fa"></i>
											</span>
											<span class="label">35</span>
										</a> 
									</div>
								</div>															
							</div>
						</div>
					</li>
					<li class="portfolio-item isotope-item has-thumbnail">
						<div class="portfolio-item-fw-bg">
							<div class="portfolio-item-fill"></div>
							<div class="list_style_header">
								<h3 class="entry-title">									
									<div class="links_wrapper"> 
										<a href="#" class="button the-icon portfolio_prev_js">
											<span class="button_icon">
												<i class="icon-up-open"></i>
											</span>
										</a>
										<a href="#" class="button the-icon portfolio_next_js">
											<span class="button_icon"><i class="icon-down-open"></i></span></a>
											<a href="{{route('product_detail', ['name' => 'Restaurant Management'])}}" class="button button_theme has-icon">
											<span class="button_icon">
												<i class="icon-link"></i>
											</span>
											<span class="button_label">Read more</span>
										</a> 
									</div>
							</div>
							<div class="image_frame scale-with-grid">
								<div class="image_wrapper">
									<a href="{{route('product_detail', ['name' => 'Restaurant Management'])}}">
										<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Restaurant-Management-System.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
									<div class="image_links double"> <a href="{{ asset('images/Restaurant-Management-System.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="{{route('product_detail', ['name' => 'Restaurant Management'])}}" class="link"><i class="icon-link"></i></a> </div>
								</div>
							</div>
							<div class="desc">
								<div class="title_wrapper">
									<h5 class="entry-title"><a class="link" href="{{route('product_detail', ['name' => 'Restaurant Management'])}}" >Restaurant Management</a></h5>
									<div class="button-love"> 
										<a href="#" class="mfn-love" data-id="303">
											<span class="icons-wrapper">
												<i class="icon-heart-empty-fa"></i>
												<i class="icon-heart-fa"></i>
											</span>
											<span class="label">35</span>
										</a> 
									</div>
								</div>															
							</div>
						</div>
					</li>
					<li class="portfolio-item isotope-item has-thumbnail">
						<div class="portfolio-item-fw-bg">
							<div class="portfolio-item-fill"></div>
							<div class="list_style_header">
								<h3 class="entry-title">									
									<div class="links_wrapper"> 
										<a href="#" class="button the-icon portfolio_prev_js">
											<span class="button_icon">
												<i class="icon-up-open"></i>
											</span>
										</a>
										<a href="#" class="button the-icon portfolio_next_js">
											<span class="button_icon"><i class="icon-down-open"></i></span></a>
											<a href="{{route('product_detail', ['name' => 'Point Of Sale'])}}" class="button button_theme has-icon">
											<span class="button_icon">
												<i class="icon-link"></i>
											</span>
											<span class="button_label">Read more</span>
										</a> 
									</div>
							</div>
							<div class="image_frame scale-with-grid">
								<div class="image_wrapper">
									<a href="{{route('product_detail', ['name' => 'Point Of Sale'])}}">
										<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Points-of-Sales-System-.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
									<div class="image_links double"> <a href="{{ asset('images/Points-of-Sales-System-.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="{{route('product_detail', ['name' => 'Point Of Sale'])}}" class="link"><i class="icon-link"></i></a> </div>
								</div>
							</div>
							<div class="desc">
								<div class="title_wrapper">
									<h5 class="entry-title">
										<a class="link" href="{{route('product_detail', ['name' => 'Point Of Sale'])}}" >Point of Sales System</a></h5>
									<div class="button-love"> 
										<a href="#" class="mfn-love" data-id="303">
											<span class="icons-wrapper">
												<i class="icon-heart-empty-fa"></i>
												<i class="icon-heart-fa"></i>
											</span>
											<span class="label">35</span>
										</a> 
									</div>
								</div>															
							</div>
						</div>
					</li>
					<li class="portfolio-item isotope-item has-thumbnail">
						<div class="portfolio-item-fw-bg">
							<div class="portfolio-item-fill"></div>
							<div class="list_style_header">
								<h3 class="entry-title">									
									<div class="links_wrapper"> 
										<a href="#" class="button the-icon portfolio_prev_js">
											<span class="button_icon">
												<i class="icon-up-open"></i>
											</span>
										</a>
										<a href="#" class="button the-icon portfolio_next_js">
											<span class="button_icon"><i class="icon-down-open"></i></span></a>
											<a href="{{route('product_detail', ['name' => 'Human Resources'])}}" class="button button_theme has-icon">
											<span class="button_icon">
												<i class="icon-link"></i>
											</span>
											<span class="button_label">Read more</span>
										</a> 
									</div>
							</div>
							<div class="image_frame scale-with-grid">
								<div class="image_wrapper">
									<a href="{{route('product_detail', ['name' => 'Human Resources'])}}">
										<div class="mask"></div><img width="780" height="437" src="{{ asset('images/Human-Resources-System.png')}}" class="scale-with-grid wp-post-image" loading="lazy"></a>
									<div class="image_links double"> <a href="{{ asset('images/Human-Resources-System.png')}}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="{{route('product_detail', ['name' => 'Human Resources'])}}" class="link"><i class="icon-link"></i></a> </div>
								</div>
							</div>
							<div class="desc">
								<div class="title_wrapper">
									<h5 class="entry-title"><a class="link" href="portfolio-item.html">Human Resources System</a></h5>
									<div class="button-love"> 
										<a href="#" class="mfn-love" data-id="303">
											<span class="icons-wrapper">
												<i class="icon-heart-empty-fa"></i>
												<i class="icon-heart-fa"></i>
											</span>
											<span class="label">35</span>
										</a> 
									</div>
								</div>															
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection