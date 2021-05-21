@extends('layouts.frontend')
@section('content')	

<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/services.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/services_responsive.css')}}">


<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/slider/st.jpg')}}" data-speed="0.8"></div>
    <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="prices">
    <div class="container">
        <div class="row">

            <!-- Price -->
            <div class="col-lg-6 price_col">
                <div class="price">
                    <div class="price_title">Daily Protection Sunscreen</div>
                    <div class="price_text">
                        <p>Light textured daily sunscreen suitable for dry and oily skin types. Contains formula that gives extra protection against UVA & UVB SPF 50 PA+++</p>
                    </div>
                    <div class="price_panel">20ml</div>
                </div>
            </div>

            <!-- Price -->
            <div class="col-lg-6 price_col">
                <div class="price">
                    <div class="price_title">Night Radiance Cream</div>
                    <div class="price_text">
                        <p>Integer aliquet congue libero, eu gravida odio ultrces ut. Etiam ac erat ut enim maximus accumsan vel ac nisl.</p>
                    </div>
                    <div class="price_panel">20ml</div>
                </div>
            </div>

            <!-- Price -->
            <div class="col-lg-6 price_col">
                <div class="price">
                    <div class="price_title">Intense Brightening Serum</div>
                    <div class="price_text">
                        <p>Integer aliquet congue libero, eu gravida odio ultrces ut. Etiam ac erat ut enim maximus accumsan vel ac nisl.</p>
                    </div>
                    <div class="price_panel">20ml</div>
                </div>
            </div>

            <!-- Price -->
            <div class="col-lg-6 price_col">
                <div class="price">
                    <div class="price_title">Acne Care Serum</div>
                    <div class="price_text">
                        <p>Integer aliquet congue libero, eu gravida odio ultrces ut. Etiam ac erat ut enim maximus accumsan vel ac nisl.</p>
                    </div>
                    <div class="price_panel">20ml</div>
                </div>
            </div>

            <!-- Price -->
            <div class="col-lg-6 price_col">
                <div class="price">
                    <div class="price_title">Gentle Cleansing Gel</div>
                    <div class="price_text">
                        <p>Integer aliquet congue libero, eu gravida odio ultrces ut. Etiam ac erat ut enim maximus accumsan vel ac nisl.</p>
                    </div>
                    <div class="price_panel">120ml</div>
                </div>
            </div>

            <!-- Price -->
         

        </div>
    </div>
</div>


@endsection