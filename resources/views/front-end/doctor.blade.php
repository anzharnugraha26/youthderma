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
                        <div class="home_title">Meet Our Doctors</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front-end.include.doctor')


@endsection