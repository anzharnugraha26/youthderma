<div class="row services_row">
	
	<!-- Service -->
	<?php $t = DB::table('treatments')->get(); ?>
	@foreach ($t as $item)
		
	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/'. $item->image)}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">{{$item->name}}</div>
				<div class="service_text">
					<a href="{{url('detail-treatment/' . $item->id)}}"><p>{{$item->caption}}</p></a>
				</div>
			</div>
		</div>
	</div>
	
	@endforeach

	<!-- Service -->
	{{-- <div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/dermal-filler.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">DERMAL FILLER</div>
				<div class="service_text">
					<p>Dermal Filler reverses Aging Sign's on face giving back volume, lifted cheek, sharper nose and chin. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/skin-booster.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">SKIN BOOSTER</div>
				<div class="service_text">
					<p>Popular as Glass Skin or skin quality. this treatment improves collagen under the skin. it makes skin become brighter. smoother and glowing.  </p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/tread-lift.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">THREADLIFT</div>
				<div class="service_text">
					<p>powerful collagen stimulating treatment to help lift up the sagging face. It smoothen deep wrinkles and make the face look younger.   </p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/glowing.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">GLOWING BOOSTER INFUSION</div>
				<div class="service_text">
					<p>Glowing Booster and vitamin infusion helps to detox free radicals, improve immune system and brightening skin tone.    </p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/ultrap.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">ULTRA PRP+</div>
				<div class="service_text">
					<p>Ultra PRP+ offers powerful collagen stimulation effect on the. With it's natural anti aging properties, ski becomes smoother, less wrinkle and improved skin tone.     </p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/fat-freezing.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">FAT FREEZING TREATMENT</div>
				<div class="service_text">
					<p>Fat freezing is popular, effective way to treat unwanted fat without surgery and maintain the ideal body weight.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/laser.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">LASER TREATMENT</div>
				<div class="service_text">
					<p>Laser treatment helps to stimulating collagen and treated skin problem. Popular treatments including rejuvenation, hair removal, melasma and acne scars. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/aquapeel.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">HYDRA GLOW FACIAL</div>
				<div class="service_text">
					<p>Hydra Facial treatment uses infused serum and natural H20 to exfoliates dead skin's outer layer. It makes skin cleansed and brighter. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-md-6 service_col">
		<div class="service text-center">
			<div class="service">
				<div>
					<img src="{{asset('image/services/ultralifmmu.jpg')}}" alt="" height="300px" width="300px">
				</div>
				<div class="service_title" style="color: #5193B1">ULTRALIFT MMFU TREATMENT</div>
				<div class="service_text">
					<p>is a completely non-invasive, face lifting and tightening device that provides a customized treatment procedure for the entire face and neck</p>
				</div>
			</div>
		</div>
	</div> --}}


</div>