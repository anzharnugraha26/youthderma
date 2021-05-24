@extends('layouts.frontend')
@section('content')	

<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/services.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/services_responsive.css')}}">


<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/background/product.jpg')}}" data-speed="0.8"></div>
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

           
            @foreach ($product as $item)
                
           <a href="{{url("product-detail/$item->id")}}"> 
               <div class="col-lg-4 price_col">
                <div style="">
                    <img src="{{asset('image/product/'.$item->image)}}" width="200px" height="200px" style="display:block; margin-left:  auto;
                    margin-right: auto;">
                </div>
                 <div class="price">
                    <div class="price_title">{{$item->name}}</div>
                    <div class="price_text">
                      
                    </div>
                    <a href="{{url("product-detail/$item->id")}}"><div class="price_panel" style="background: #84CDEE">Click To Detail</div></a>
                 </div>
                </div>
           </a>   
            @endforeach
           
        </div>
    </div>
</div>


@endsection