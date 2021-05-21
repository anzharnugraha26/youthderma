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
                        <div class="home_title">About US</div>
                        <div class="home_text" style="color: black">Youthderma helps you get the best facial appearance. Using advanced technology and medical treatments by professional doctors and aesthetic treatments by experienced beauty therapists.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front-end.include.profile')
@include('front-end.include.about')

@endsection