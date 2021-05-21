<div class="intro">
	<div class="container">
		<div class="row">

			<!-- Intro Content -->
			<div class="col-lg-6 intro_col">
				<div class="intro_content">
					<div class="section_title_container">
						<div class="section_subtitle" style="text-align: center">This is Youthderma Aesthetic Clinic</div>
						<div class="section_title"><h2 style="text-align: center">Welcome to our Clinic</h2></div>
					</div>
					<div>
						<p style="text-align: center">A beauty and health clinic not only focuses on beautifying your face, but we can also make your dream body come true. Under the direct care of our professional doctors, we provide effective medical aesthetic treatments with modern technology that is popular with all ages.
							Your comfortable and satisfaction is our main goals. We are committee to providing effective services according to your treatment needs.
							</p>
					</div>
					{{-- <div class="milestones">
						<div class="row milestones_row">
						
							<!-- Milestone -->
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
									<div class="milestone_text">Satisfied Patients</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="352">0</div>
									<div class="milestone_text">Face Liftings</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="718">0</div>
									<div class="milestone_text">Injectibles</div>
								</div>
							</div>

						</div>
					</div> --}}
				</div>
			</div>

			<!-- Intro Form -->
			<div class="col-lg-6 intro_col">
				<div class="intro_form_container">
					<div class="intro_form_title" style="background: #5193B1">Make an Appointment</div>
					<form action="{{url('savebooking')}}" method="POST" class="intro_form" id="intro_form">
						@csrf
						<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
							<input type="text" class="intro_input" placeholder="Your Name" required="required" name="name">
							<input type="email" class="intro_input" placeholder="Your E-mail" required="required" name="email">
							<input type="number" class="intro_input" placeholder="Your Phone" required="required" name="phone">
							<select class="intro_select intro_input" required name="threatment">
								<option disabled="" selected="" value="">Treatment</option>
								<option value="BOTOX TREATMENT">BOTOX TREATMENT</option>
								<option value="DERMAL FILLER">DERMAL FILLER</option>
								<option value="SKIN QUALITY">SKIN QUALITY</option>
								<option value="THREAD LIFT A">THREAD LIFT A</option>
								<option value="GLOWING BOOSTER INFUSION">GLOWING BOOSTER INFUSION</option>
								<option value="ULTRA PRP+">ULTRA PRP+</option>
								<option value="FAT FREEZING">FAT FREEZING</option>
								<option value="LASER TREATMENT">LASER TREATMENT</option>
								<option value="HYDRA FACIAL">HYDRA FACIAL</option>
								<option value="Ultra Layer Lift MMFU">Ultra Layer Lift MMFU</option>
							</select>
							<select class="intro_select intro_input" required="required" name="doctor">
									<option disabled="" selected="" value="">Doctor</option>
									<option value="dr. Lia Permata Sari, dipl. CIBTAC">dr. Lia Permata Sari, dipl. CIBTAC</option>
									<option value="dr. Anisa Amalia">dr. Anisa Amalia</option>
									<option value="dr. Febrina Andarini,Sp.KK">dr. Febrina Andarini,Sp.KK</option>
								</select>
							<input type="text" id="datepicker" class="intro_input datepicker" placeholder="Date" required="required" name="date">
						</div>
						<button class="button button_1 intro_button trans_200" style="background: #84CDEE">make an appointment</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>