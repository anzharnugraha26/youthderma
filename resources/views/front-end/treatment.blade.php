@extends('layouts.frontend')
@section('content')	


<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/slider/st.jpg')}}" data-speed="0.8"></div>
    <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Treatment</div>
                        <div class="home_text" style="color: black">Youthderma helps you get the best facial appearance. Using advanced technology and medical treatments by professional doctors and aesthetic treatments by experienced beauty therapists.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="services">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title_container">
					<div class="section_title"><h4>We provide Only best services </h4></div>
				</div>
			</div>
		</div>
		@include('front-end.include.treatment')
	</div>
</div>


<div class="before_and_after">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">This is Dr Pro</div>
                    <div class="section_title">
                        <h2>Before & After Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row before_and_after_row">
            <div class="col">
                <div class="ba_container">
                    <figure class="cd-image-container">
                        <img src="{{asset('pro-master/images/before.jpg')}}" alt="Original Image">
                        <span class="cd-image-label" data-type="original"></span>

                        <div class="cd-resize-img">
                            <img src="{{asset('pro-master/images/after.jpg')}}" alt="Modified Image">
                            <span class="cd-image-label" data-type="modified"></span>
                        </div>

                        <span class="cd-handle"></span>
                    </figure>
                </div>
                <div class="ba_text text-center">
                    <p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus.</p>
                </div>
                <div class="ba_button_container text-center">
                    <div class="button button_1 ba_button"><a href="#">see gallery</a></div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<link rel="stylesheet" type="text/css" href="{{asset('pro-master/plugins/image-comparison-slider-master/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/services.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/services_responsive.css')}}">


<script src="{{asset('pro-master/plugins/image-comparison-slider-master/main.js')}}"></script>
<script src="{{asset('pro-master/js/services.js')}}"></script>
    
@endsection



