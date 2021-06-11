@extends('layouts.frontend')
@section('content')	
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<div class="home">

	<!-- Home Slider -->
	<div class="home_slider_container">
		<div class="owl-carousel owl-theme home_slider">
			
			<!-- Slide -->
			<div class="owl-item">
				<div class="background_image" style="background-image:url({{asset('image/slider/s3.jpg')}})"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content" style="margin-top: 90px">
									{{-- <div class="home_subtitle" style="color:white;">Aesthetic Clinic</div>
									<div class="home_title">Youthderma</div> --}}
									<div class="home_text" style="margin-top: 10px;" >
										<p style="color: white;font-family: 'Poppins';">Youthderma Clinic is a beauty and health clinic that provides effective medical beauty treatments with the latest technology. We maintain the quality and safety of the products provided so that everyone can combine a healthy and beautiful lifestyle in their daily life. Your satisfaction is our priority. We are committed to providing effective services according to your treatment needs.</p>
									</div>
									<div class="row">
										<div class="col-xl-4 col-md-6 " style="margin-top: 10px;width: 50%" >
											<div class="button button_1 trans_200" style="background: #5193B1"><a href="{{url("")}}" style="font-size: 10px;text-align: center">Treatment</a></div>
										</div>
										<div class="col-xl-4 col-md-6 " style="margin-top: 10px;width: 50%">
											<div class="button button_1 trans_200" style="background: #5193B1"><a href="#" style="font-size: 10px;text-align: center">Online-Store</a></div>
										</div>
										<div class="col-xl-4 col-md-6 " style="margin-top: 10px;width: 50%">
											<div class="button button_1 trans_200" style="background: #5193B1"><a href="#" style="font-size: 10px;text-align: center">Contact Us</a></div>
										</div>
									</div>
									{{-- <div class="home_buttons d-flex flex-row align-items-center justify-content-start">
										<div class="button button_1 trans_200" style="background: #5193B1"><a href="#" style="font-size: 10px">Treatment</a></div>
										<div class="button button_1 trans_200" style="background: #5193B1"><a href="#" style="font-size: 10px">Online-Store</a></div>
										<div class="button button_1 trans_200" style="background: #5193B1"><a href="#" style="font-size: 10px">Contact Us</a></div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide -->
			<div class="owl-item">
				<div class="background_image" style="background-image:url({{asset('image/slider/s4.jpg')}})"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								{{-- <div class="home_content">
									<div class="home_subtitle">#1 Plastic Surgery Clinic</div>
									<div class="home_title">Love the new you</div>
									<div class="home_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
									</div>
									<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
										<div class="button button_1 trans_200"><a href="#">read more</a></div>
										<div class="button button_2 trans_200"><a href="#">make an appointment</a></div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="owl-item">
				<div class="background_image" style="background-image:url({{asset('image/slider/new1.jpg')}})"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								{{-- <div class="home_content">
									<div class="home_subtitle">#1 Plastic Surgery Clinic</div>
									<div class="home_title">Love the new you</div>
									<div class="home_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
									</div>
									<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
										<div class="button button_1 trans_200"><a href="#">read more</a></div>
										<div class="button button_2 trans_200"><a href="#">make an appointment</a></div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="owl-item">
				<div class="background_image" style="background-image:url({{asset('image/slider/new2.jpg')}})"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								{{-- <div class="home_content">
									<div class="home_subtitle">#1 Plastic Surgery Clinic</div>
									<div class="home_title">Love the new you</div>
									<div class="home_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
									</div>
									<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
										<div class="button button_1 trans_200"><a href="#">read more</a></div>
										<div class="button button_2 trans_200"><a href="#">make an appointment</a></div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="owl-item">
				<div class="background_image" style="background-image:url({{asset('image/slider/new3.jpg')}})"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								{{-- <div class="home_content">
									<div class="home_subtitle">#1 Plastic Surgery Clinic</div>
									<div class="home_title">Love the new you</div>
									<div class="home_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
									</div>
									<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
										<div class="button button_1 trans_200"><a href="#">read more</a></div>
										<div class="button button_2 trans_200"><a href="#">make an appointment</a></div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide -->
			

		</div>

		<!-- Home Slider Dots -->

		<div class="home_slider_dots">
			<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
				<li class="home_slider_custom_dot trans_200 active"></li>
				<li class="home_slider_custom_dot trans_200"></li>
				<li class="home_slider_custom_dot trans_200"></li>
				<li class="home_slider_custom_dot trans_200"></li>
				<li class="home_slider_custom_dot trans_200"></li>
				
			</ul>
		</div>

	</div>
</div>

@include('front-end.include.profile')

<!-- Intro -->


<!-- Why Choose Us -->

<div class="why">
	<!-- <div class="background_image" style="background-image:url(images/why.jpg)"></div> -->
	<div class="container">
		<div class="row row-eq-height">

			<!-- Why Choose Us Image -->
			<div class="col-lg-6 order-lg-1 order-2">
				<div class="why_image_container">
					<div class="why_image"><img src="{{asset('image/samuel9.jpg')}}" alt=""></div>
				</div>
			</div>

			<!-- Why Choose Us Content -->
			<div class="col-lg-6 order-lg-2 order-1">
				<div class="why_content">
					<div class="section_title_container">
						<div class="section_subtitle">Youthderma Aesthetic Clinic</div>
						<div class="section_title"><h2>Why choose us?</h2></div>
					</div>
					<div class="why_text">
						<p>Youthderma Clinic is a beauty and health clinic that provides effective medical beauty treatments with the latest technology. We maintain the quality and safety of the products provided so that everyone can combine a healthy and beautiful lifestyle in their daily life. Your satisfaction is our priority. We are committed to providing effective services according to your treatment needs..</p>
					</div>
					<div class="why_list">
						<ul>

							<!-- Why List Item -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="icon_container d-flex flex-column align-items-center justify-content-center">
									<div class="icon"><img src="{{asset('pro-master/images/icon_1.svg')}}" alt="https://www.flaticon.com/authors/prosymbols"></div>
								</div>
								<div class="why_list_content">
									<div class="why_list_title">Top Products</div>
									{{-- <div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div> --}}
								</div>
							</li>

							<!-- Why List Item -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="icon_container d-flex flex-column align-items-center justify-content-center">
									<div class="icon"><img src="{{asset('pro-master/images/icon_2.svg')}}" alt="https://www.flaticon.com/authors/prosymbols"></div>
								</div>
								<div class="why_list_content">
									<div class="why_list_title">The Best Doctors</div>
									{{-- <div class="why_list_text">Ac erat ut enim maximus accumsan vel ac</div> --}}
								</div>
							</li>

							<!-- Why List Item -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="icon_container d-flex flex-column align-items-center justify-content-center">
									<div class="icon"><img src="{{asset('pro-master/images/icon_3.svg')}}" alt="https://www.flaticon.com/authors/prosymbols"></div>
								</div>
								<div class="why_list_content">
									<div class="why_list_title">Top Facilities</div>
									{{-- <div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel</div> --}}
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Call to action -->

<div class="cta" style="background: #84CDEE">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
					<div class="cta_content">
						<div class="cta_title">Ready to make your appointment ?</div>
						<div class="cta_text">Contact our customer service or message our operator on Instagram</div>
						<div class="cta_text">Oficial Account Instagram : <a href="https://www.instagram.com/youthdermaclinic/" target="_blank">@youthdermaclinic</a></div>
					</div>
					<div class="cta_phone ml-lg-auto" style="background: #5193B1"><a href="https://wa.me/6282112100020?text=Hallo Youthderma Aesthetic Clinic" style="color: white" target="_blank">0821 1210 0020</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="why" style="margin-top: 20px">
	<div class="container">
	<video style="width:100%; height:100%" controls>
		<source src="{{asset('video/video.mp4')}}" type="video/mp4">
	</video>
	</div>
</div>

{{-- <div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/background/detail.jpg')}}" data-speed="0.8">
		<video style="width:100%; height:100%" controls>
			<source src="{{asset('video/video.mp4')}}" type="video/mp4">
			Your browser does not support HTML video.
		</video>
	</div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </div>
</div> --}}



<!-- Services -->

<div class="services">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title_container">
					<div class="section_title"><h2>Treatment</h2></div>
					<div class="section_title"><p>Youthderma helps you get the best facial appearance. Using advanced technology and medical treatments by professional doctors and aesthetic treatments by experienced beauty therapists.
					</p></div>
					<div class="section_title"><h4>We provide Only best services </h4></div>

				</div>
			</div>
		</div>

		
		@include('front-end.include.treatment')
		
	</div>
</div>



<hr style="color: #84CDEE">

@include('front-end.include.doctor')



<!-- Extra -->

<div class="extra">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/background/backbawah.jpg')}}" data-speed="0.8"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="extra_container d-flex flex-row align-items-start justify-content-end">
					<div class="extra_content">
						<div class="extra_disc d-flex flex-row align-items-end justify-content-start">
							<div class="extra_title">Hi</div>
						</div>
						<div class="extra_title">Happy Shoping</div>
						<div class="extra_text">
							<p>You can order our products by visiting our online store</p>
						</div>
						<div class="button button_1 extra_link trans_200" style="background: #84CDEE"><a href="#">Online Store</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@include('front-end.include.about')




@endsection


