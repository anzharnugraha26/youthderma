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
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">{{$t->name}}</div>
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
                <div class="col-lg-7" style="margin-top: 15%">
                    <div class="intro_content">
                        <div class="section_title_container">
                            <div class="section_title"><h2 style="font-size: 35px">{{$t->name}}</h2></div>
                        </div>
                        <div style="margin-top: 40px">
                            <h5>Description</h5>
                            <p>{{$t->caption}}</p>
                        </div>                 
                    </div>
                </div>
            </div>    
<hr>
            <div class="row">
                <!-- Intro Content -->
                <div class="col-lg-12" style="margin-left: 5%;margin-right: 5%">
                    <div class="intro_content">
                        <div style="margin-top: 20px">
                            <h5>Detail Treatment</h5>
                            {!!$t->detail!!} 
                        </div>
                        <div style="margin-top: 20px">
                            <?php $tr = DB::table('image_theratments')->where('id_treatment', $t->id)->get();?>
                            @foreach ($tr as $item)
                            <div>
                            <img src="{{asset('image/services/'. $item->image)}}" style="width: 50%;height: auto;margin-bottom: 20px">
                            </div>
                            {!!$item->detail!!} 
                            @endforeach
                        </div>              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection
