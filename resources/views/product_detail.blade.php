@extends('layouts.app')
@section('content')
<div class="section mcb-section full-width mt-80" style="padding-top:125px;padding-bottom:125px;background-image:url('../images/agency4-home-splash.jpg');background-repeat:no-repeat; background-size:cover;background-position:center">
	<div class="">
		<div class="row" style="padding:30px 16%">
			<div class="col-12">
				<h2 class="text-center"><span style="color: #fff;">{{$title}}</span></h2>
				<hr class="no_line" style="margin: 0 auto 15px auto">				
			</div>
		</div>
	</div>
</div>
<div class="section" style="padding-top:75px">
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="padding:40px 2%">
				<div class="row">
					<div class="col-md-10">
						<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
							<div class="image_wrapper">
								<img class="scale-with-grid" src="{{$image_url}}" alt="agency4-services-icon1" width="780" height="785"> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="padding:40px 2%">
				<div class="column_attr clearfix mobile_align_center">
					<h2>{{$name}}</h2>
					<hr class="no_line" style="margin: 0 auto 20px auto">
					<p style="color:#ADADC1;margin:0">
						{{$content}}
					</p>
					<hr class="no_line" style="margin: 0 auto 20px auto">					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection