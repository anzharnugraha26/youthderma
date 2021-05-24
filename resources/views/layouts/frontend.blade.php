<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="{{asset('image/logo/logo3.png')}}" type="image/png">
<title>YOUTHDERMA AESTHETIC CLINIC</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('pro-master/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link href="{{asset('pro-master/plugins/jquery-datepicker/jquery-ui.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/responsive.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/about_responsive.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('pro-master/styles/contact_responsive.css')}}">
</head>
<body>

  

<div class="super_container">
	
	<header class="header trans_400">
    <div class="main-top" style="font-size: 15px;" >
      <div class="row" >
          <div class="col-md-12">
            <div style="float: right;margin-right:120px ">
              <p style="color: #84CDEE;">Contact :</p>
            </div>
          </div>
      </div>
    </div>
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="{{url("/")}}">
					<img src="{{asset('image/logo/logo.png')}}" height="33px" width="200px">
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="{{ '/' == request()->path()? 'active' : ''}}"><a href="{{url("/")}}">HOME</a></li>
					<li class="{{ 'treatment' == request()->path()? 'active' : ''}}"><a href="{{url("/treatment")}}">TREATMENT</a></li>
					<li class="{{ 'product' == request()->path()? 'active' : ''}}"><a href="{{url("/product")}}">PRODUCT</a></li>
					<li class="{{ 'doctor' == request()->path()? 'active' : ''}}"><a href="{{url("/doctor")}}">DOCTOR</a></li>
					<li class="{{ 'about-us' == request()->path()? 'active' : ''}}"><a href="{{url("/about-us")}}">ABOUT-US</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Mo - Sat: 8:00am - 9:00pm</div>

				<!-- Header Phone -->
				<div class="header_phone">+34 586 778 8892</div>

				<!-- Appointment Button -->
				<div class="button button_1 header_button" style="background: #84CDEE" ><a href="#" onclick=""  id="comingsoon"><img src="{{asset('image/iconshop.png')}}" width="30px" height="20px"> |  Online Store</a></div>

				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="https://www.instagram.com/youthdermaclinic/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						{{-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> --}}
					</ul>
				</div>

				<!-- Hamburger -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li class="{{ '/' == request()->path()? 'active' : ''}}"><a href="{{url("/")}}">HOME</a></li>
				<li class="{{ 'treatment' == request()->path()? 'active' : ''}}"><a href="{{url("/treatment")}}">TREATMENT</a></li>
				<li class="{{ 'product' == request()->path()? 'active' : ''}}"><a href="{{url("/product")}}">PRODUCT</a></li>
				<li class="{{ 'doctor' == request()->path()? 'active' : ''}}"><a href="{{url("/doctor")}}">DOCTOR</a></li>
				<li class="{{ 'about-us' == request()->path()? 'active' : ''}}"><a href="{{url("/about-us")}}">ABOUT-US</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
			<div class="menu_link">+34 586 778 8892</div>
			<div class="menu_link"><a href="#">Make an appointment</a></div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

@yield('content')

	<!-- Newsletter -->

	{{-- <div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('pro-master/images/newsletter.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="newsletter_title">Subscribe to our newsletter</div>
				</div>
			</div>
			<div class="row newsletter_row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_form_container">
						<form action="#" id="newsleter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
							<button class="newsletter_button">subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- Footer -->

	<footer class="footer">
    <div class="main-top" style="font-size: 15px;background-color: #5193B1" >
      <div class="row" >
          <div class="col-md-12">
            <div style="float: right;margin-right:120px ">
              <p style="color: #5193B1">Contact :</p>
            </div>
          </div>
      </div>
    </div>

      @yield('footer')
		<div class="footer_bar" style="background-color: #84CDEE;">
			<div class="container" >
        <a href="https://wa.me/6282112100020?text=Hallo Youthderma Aesthetic Clinic" class="float" target="_blank">						
          <i class="fa fa-whatsapp my-float"></i></a>
				<div class="row" style="margin: auto;
        width: 50%;">
					<div class="col">
						<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<label style="color: white;text-align: center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Youthderma Aesthetic Clinic | By <a href="http://tinggaljualan.com/" target="_blank">tinggaljualan.com</a> </label>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="{{asset('pro-master/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('pro-master/styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('pro-master/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('pro-master/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('pro-master/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('pro-master/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('pro-master/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('pro-master/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('pro-master/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('pro-master/plugins/easing/easing.js')}}"></script>
<script src="{{asset('pro-master/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('pro-master/plugins/jquery-datepicker/jquery-ui.js')}}"></script>
<script src="{{asset('pro-master/js/custom.js')}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@yield('script')

{{-- <script src="{{asset('pro-master/plugins/image-comparison-slider-master/main.js')}}"></script>
<script src="{{asset('pro-master/js/services.js')}}"></script> --}}



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

@include('front-end.include.toast')


<script>
	$(document).ready(function() {
            $('#comingsoon').click(function() {
                swal({
                        title: "Are you sure?",
                        text: "Are you sure you want to delete this data?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/datakaryawan/" + karyawan_id + "/delete";
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
            });
		});
</script>

</body>
</html>