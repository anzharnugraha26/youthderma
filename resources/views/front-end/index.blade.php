@extends('layouts.frontend')
@section('content')	
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
								<div class="home_content" style="margin-top: 60px">
									<div class="home_subtitle" style="color:white;">Aesthetic Clinic</div>
									<div class="home_title">Youthderma</div>
									<div class="home_text">
										<p style="color: white;">A beauty and health clinic not only focuses on beautifying your face, but we can also make your dream body come true.</p>
									</div>
									<div class="row">
										<div class="col-xl-4 col-md-6 " style="margin-top: 10px;width: 60%" >
											<div class="button button_1 trans_200" style="background: #5193B1"><a href="#" style="font-size: 10px;text-align: center">Treatment</a></div>
										</div>
										<div class="col-xl-4 col-md-6 " style="margin-top: 10px;width: 60%">
											<div class="button button_1 trans_200" style="background: #5193B1"><a href="#" style="font-size: 10px;text-align: center">Online-Store</a></div>
										</div>
										<div class="col-xl-4 col-md-6 " style="margin-top: 10px;width: 60%">
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

			<!-- Slide -->
			

		</div>

		<!-- Home Slider Dots -->

		<div class="home_slider_dots">
			<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
				<li class="home_slider_custom_dot trans_200 active"></li>
				<li class="home_slider_custom_dot trans_200"></li>
				
			</ul>
		</div>

	</div>
</div>

<!-- Intro -->

<div class="intro">
	<div class="container">
		<div class="row">

			<!-- Intro Content -->
			<div class="col-lg-6 intro_col">
				<div class="intro_content">
					<div class="section_title_container">
						<div class="section_subtitle" style="text-align: center">This is Youthderma Aesthetic Clinic</div>
						<div class="section_title"><h2 style="text-align: center">Welcome to our Clinic</h2></div>
					</div>
					<div>
						<p style="text-align: center">A beauty and health clinic not only focuses on beautifying your face, but we can also make your dream body come true. Under the direct care of our professional doctors, we provide effective medical aesthetic treatments with modern technology that is popular with all ages.
							Your comfortable and satisfaction is our main goals. We are committee to providing effective services according to your treatment needs.
							</p>
					</div>
					{{-- <div class="milestones">
						<div class="row milestones_row">
						
							<!-- Milestone -->
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
									<div class="milestone_text">Satisfied Patients</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="352">0</div>
									<div class="milestone_text">Face Liftings</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="718">0</div>
									<div class="milestone_text">Injectibles</div>
								</div>
							</div>

						</div>
					</div> --}}
				</div>
			</div>

			<!-- Intro Form -->
			<div class="col-lg-6 intro_col">
				<div class="intro_form_container">
					<div class="intro_form_title" style="background: #5193B1">Make an Appointment</div>
					<form action="{{url('savebooking')}}" method="POST" class="intro_form" id="intro_form">
						@csrf
						<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
							<input type="text" class="intro_input" placeholder="Your Name" required="required" name="name">
							<input type="email" class="intro_input" placeholder="Your E-mail" required="required" name="email">
							<input type="number" class="intro_input" placeholder="Your Phone" required="required" name="phone">
							<select class="intro_select intro_input" required name="threatment">
								<option disabled="" selected="" value="">Treatment</option>
								<option value="BOTOX TREATMENT">BOTOX TREATMENT</option>
								<option value="DERMAL FILLER">DERMAL FILLER</option>
								<option value="SKIN QUALITY">SKIN QUALITY</option>
								<option value="THREAD LIFT A">THREAD LIFT A</option>
								<option value="GLOWING BOOSTER INFUSION">GLOWING BOOSTER INFUSION</option>
								<option value="ULTRA PRP+">ULTRA PRP+</option>
								<option value="FAT FREEZING">FAT FREEZING</option>
								<option value="LASER TREATMENT">LASER TREATMENT</option>
								<option value="HYDRA FACIAL">HYDRA FACIAL</option>
								<option value="Ultra Layer Lift MMFU">Ultra Layer Lift MMFU</option>
							</select>
							<select class="intro_select intro_input" required="required" name="doctor">
									<option disabled="" selected="" value="">Doctor</option>
									<option value="dr. Lia Permata Sari, dipl. CIBTAC">dr. Lia Permata Sari, dipl. CIBTAC</option>
									<option value="dr. Anisa Amalia">dr. Anisa Amalia</option>
									<option value="dr. Febrina Andarini,Sp.KK">dr. Febrina Andarini,Sp.KK</option>
								</select>
							<input type="text" id="datepicker" class="intro_input datepicker" placeholder="Date" required="required" name="date">
						</div>
						<button class="button button_1 intro_button trans_200" style="background: #84CDEE">make an appointment</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

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
						<div class="section_subtitle">This is Dr Pro</div>
						<div class="section_title"><h2>Why choose us?</h2></div>
					</div>
					<div class="why_text">
						<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna vestibulum in. Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus, vel pharetra metus dolor.</p>
					</div>
					<div class="why_list">
						<ul>

							<!-- Why List Item -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="icon_container d-flex flex-column align-items-center justify-content-center">
									<div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
								</div>
								<div class="why_list_content">
									<div class="why_list_title">Only Top Products</div>
									<div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
								</div>
							</li>

							<!-- Why List Item -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="icon_container d-flex flex-column align-items-center justify-content-center">
									<div class="icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
								</div>
								<div class="why_list_content">
									<div class="why_list_title">The best Doctors</div>
									<div class="why_list_text">Ac erat ut enim maximus accumsan vel ac</div>
								</div>
							</li>

							<!-- Why List Item -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="icon_container d-flex flex-column align-items-center justify-content-center">
									<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
								</div>
								<div class="why_list_content">
									<div class="why_list_title">Great Feedback</div>
									<div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel</div>
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
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('pro-master/images/extra.jpg')}}" data-speed="0.8"></div>
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


<div class="contact">
	<div class="container">
		<div class="row">

			<!-- Contact Form -->
			<div class="col-lg-6">
				<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=pesona%20mahameru+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/"></a></div>

				{{-- <div class="contact_form_container">
					<div class="contact_form_title">Make an Appointment</div>
					<form action="#" class="contact_form" id="contact_form">
						<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
							<input type="text" class="contact_input" placeholder="Your Name" required="required">
							<input type="email" class="contact_input" placeholder="Your E-mail" required="required">
							<input type="tel" class="contact_input" placeholder="Your Phone" required="required">
							<select class="contact_select contact_input" required>
								<option disabled="" selected="">Speciality</option>
								<option>Speciality 1</option>
								<option>Speciality 2</option>
								<option>Speciality 3</option>
								<option>Speciality 4</option>
								<option>Speciality 5</option>
							</select>
							<select class="contact_select contact_input"required="required">
									<option disabled="" selected="">Doctor</option>
									<option>Doctor 1</option>
									<option>Doctor 2</option>
									<option>Doctor 3</option>
									<option>Doctor 4</option>
									<option>Doctor 5</option>
								</select>
							<input type="text" id="datepicker" class="contact_input datepicker" placeholder="Date" required="required">
						</div>
						<button class="button button_1 contact_button trans_200">make an appointment</button>
					</form>
				</div> --}}
			</div>

			<!-- Contact Content -->
			<div class="col-lg-5 offset-lg-1 contact_col">
				<div class="contact_content">
					<div class="contact_content_title">Contact Us</div>
					<div class="direct_line d-flex flex-row align-items-center justify-content-start">
						<div class="direct_line_title text-center" style="background: #5193B1">WhatsApp</div>
						<div class="direct_line_num text-center">0821 1210 0020</div>
					</div>
					<div class="contact_info">
						<ul>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Address</div>
								<div >Emerald Avenue II EB/B-07 Sektor 9, Bintaro Jaya. Tangerang Selatan</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Phone</div>
								<div>(021) 74866669</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>E-mail</div>
								<div>info.youthderma@gmail.com</div>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
</div>




@endsection


