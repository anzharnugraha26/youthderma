@extends('layouts.frontend')
@section('content')	


<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/slider/s3.jpg')}}" data-speed="0.8"></div>
    <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">About US</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro">
	<div class="container">
        <div class="col">
            <div class="col text-center">
				<div class="section_title_container">
					<div class="section_title"><h4>YOUTHDERMA AESTHETIC CLINIC </h4></div>
				</div>
			</div>
            <div class="row">
                <div class="col-lg-6 intro_col">
                    <div class="intro_content">
                        <img src="{{asset('image/about/b2.jpg')}}" width="500px" height="270px">
                    </div>
                </div>
    
                <!-- Intro Form -->
                <div class="col-lg-6 intro_col">
                    <div class="intro_content">
                        <img src="{{asset('image/about/b1.jpg')}}" width="500px" height="270px">
                    </div>
                </div>
    
            </div>  
       
		    <div class="row">
			    <div class="col-lg-12 intro_col">
				    <div class="intro_content">
					<p>
                        Present as a solution to meet the needs and desires to appear confident of all ages, both men and 
                        women. Youthderma Clinic is a trusted beauty clinic which is part of PT. Citra Utama Andalan, a subsidiary 
                        of Stay Beauty Clinic Alam Sutera.
                    </p>
                    <p>
                    Scientifically based with experience in dealing with various skin problems, especially in Indonesia, is our 
                    main and main foundation in providing health services. Ethics is a basic reference in our health care. 
                    Treating patients of all ages including pediatrics, adolescents, adults, geriatrics.
                    </p>
                    <p>
                    Youthderma team consists of experienced professional doctors and dermatologists who have the ability 
                    to treat various aesthetic and dermatological problems, especially in the field of aesthetic medicine / 
                    cosmetics.
                    </p>
				    </div>
			    </div>
		    </div>

            <div class="row">
                <div class="col-lg-6 intro_col">
                    <div class="intro_content">
                        <img src="{{asset('image/about/b3.jpg')}}" width="500px" height="300px">
                    </div>
                </div>
    
                <!-- Intro Form -->
                <div class="col-lg-6 intro_col">
                    <div class="intro_content">
                        <div style="margin-top: 20px">
                            VISION
                            <p>To be the best and most trusted Beauty Center that serves all patients.</p>
                        </div>
                        <div style="margin-top: 20px">
                            MISSION
                            <p>Show the best of everyone and restore confidence * Provide the best service and provide the best 
                                solutions for patients in the fields of health and medical aesthetics.</p>
                        </div>
                        <div style="margin-top: 20px">
                            ADVANTAGES
                            <p>
                                Proven treatment, convenient facilities and state-of-the-art laser equipment.   
                            </p>
                        </div>
                    </div>
                </div>
    
            </div>

        </div>
	</div>
</div>



@include('front-end.include.about')

@include('front-end.include.footer')

@endsection