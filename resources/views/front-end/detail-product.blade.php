@extends('layouts.frontend')
@section('content')

@if($product == null)

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
</div>

@else

<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/slider/st.jpg')}}" data-speed="0.8"></div>
    <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">{{$product->name}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container" style="margin-top: 50px;">
    <div class="card card-solid" style="margin-bottom: 90px">
        <div class="card-body">
            <div class="col">
                <div class="row" style="font-size: 20px">
                    <div class="col-12 col-sm-6">
                      <h3 class="d-inline-block d-sm-none"></h3>
                      <div class="col-12">
                        <img src="{{asset('image/product/'.$product->image)}}" class="product-image" alt="Product Image" width="500px" height="500px">
                      </div>
                     
                    </div>
                    <div class="col-12 col-sm-6">
                      <h3 class="my-3">{{$product->name}}</h3>
                      <div>
                          Description
                          <p>{{$product->description}}</p>
                      </div>
                      <hr>
                      <div>
                            Suited To
                          <p>{{$product->suitedto}}</p>
                      </div>
                      <hr>
                      <div>
                        How To Use 
                          <p>{{$product->howtouse}}</p>
                      </div>
                      <hr>
                      <div>
                        Skin Feel
                          <p>{{$product->skinfeel}}</p>
                      </div>
                      
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="font-size: 20px">
                    <div class="col-12 col-sm-6" style="margin-top: 25px">
                        Key Ingredients                      
                    </div>
                    <div class="col-12 col-sm-6" style="margin-top: 25px">
                        Ingredients      
                    </div>
                  </div>
            </div>
          
          
        </div>
        
        
     
    </div>

</div>


@endif
@endsection