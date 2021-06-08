@extends('layouts.frontend')
@section('content')

@if($t == null)

<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/slider/st.jpg')}}" data-speed="0.8"></div>
    <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title"><h2>Data Tidak Ada</h2></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@else

<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/background/detail.jpg')}}" data-speed="0.8"></div>
    {{-- <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div> --}}
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Detail Treatment</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro">
    <div class="container">
        <div class="col">
            <div class="row">

                <div class="col-lg-4 offset-lg-1" style="margin-top: 100px">
                    <div class="team_image"><img src="{{asset('image/services/'.$t->image)}}" alt="" ></div>
                </div>
                <!-- Intro Content -->
                <div class="col-lg-7">
                    <div class="intro_content">
                        <div class="section_title_container">
                            {{-- <div class="section_subtitle">This is Dr Pro</div> --}}
                            <div class="section_title"><h2 style="font-size: 35px">{{$t->name}}</h2></div>
                        </div>
                        <div style="margin-top: 40px">
                            Description
                            <p>{{$t->caption}}</p>
                        </div>                 
                    </div>
                </div>

                <!-- Intro Image -->
                
            </div>
            
<hr>
            <div class="row">

                <!-- Intro Content -->
                <div class="col-lg-12">
                    <div class="intro_content">
                        <div style="margin-top: 20px">
                            Detail Treatment
                            {!!$t->detail!!} 
                        </div>             
                    </div>
                </div>

                <!-- Intro Image -->
                {{-- <div class="col-lg-6">
                    <div class="intro_content">
                        <div style="margin-top: 20px">
                            Ingredients 
                    {!!$product->ingredients!!} 
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

@endif

@endsection
