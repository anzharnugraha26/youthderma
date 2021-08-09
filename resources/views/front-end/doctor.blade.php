@extends('layouts.frontend')
@section('content')	

<div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/slider/fd.jpg')}}" data-speed="0.8"></div>
    <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Doctor</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="home d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('image/slider/doctorback.jpg')}}" data-speed="0.8"></div>
    <div class="home_overlay"><img src="{{asset('image/slider/home_overlay.png')}}" alt=""></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <!--<div class="home_title">Meet Our Doctors</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@include('front-end.include.doctor')

<div class="intro">
    <div class="container">
        <div class="row">

            <!-- Intro Content -->
            <div class="col-lg-7">
                <div class="intro_content">
                    <div class="section_title_container">
                        {{-- <div class="section_subtitle">This is Dr Pro</div> --}}
                        <div class="section_title"><h2 style="font-size: 35px">dr. Lia Permata Sari, dipl. CIBTAC</h2></div>
                        <div class="team_title" style="font-size: 24px"> Head Doctor</div>
                    </div>
                    <div style="margin-top: 40px">
                        MAIN INTEREST (S) 
                        <p>Cosmetic,  Aesthetic & Anti Aging. Face Contouring, Botox, Dermal Filler Injection, Skin Booster, Threadlift.</p>
                    </div>
                    <div style="margin-top: 30px">
                        ACHIEVEMENT (S)  
                        <p>1. Restylane Dermal Filler Master Class Galderma 2019 </p>
                        <p>2. IMCAS CONGRESS ACADEMY 2020  </p>
                        <p>3. Neuvia Dermal Filler Face Contouring Workshop 2019 </p>
                        <p>4. Professional Aesthetic Medical Jakarta, Esthetico Derma Institute 2015</p>
                        <p>5. CIBTAC Diploma in Facial Applications 2014 UK.</p>
                        <p>6. Participant BIOTEC Italia, Multi Laser to treat Different Case & True Body Liposclupture, Carla Aesthetic Institute 2014.</p>
                    </div>
                    <div style="margin-top: 30px">
                        DOCTOR SCHEDULE 
                        <p>Monday, 10.00 – 16.00</p>
                        <p>Wednesday, 10.00 – 16.00</p>
                        <p>Thursday, 10.00 – 19.00</p>
                    </div>

                    <!-- Milestones -->
                    {{-- <div class="milestones">
                        <div class="row milestones_row">
                        
                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
                                    <div class="milestone_text">Satisfied Patients</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="352">0</div>
                                    <div class="milestone_text">Face Liftings</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="718">0</div>
                                    <div class="milestone_text">Injectibles</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="5">0</div>
                                    <div class="milestone_text">Awards Won</div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                </div>
            </div>

            <!-- Intro Image -->
            <div class="col-lg-4 offset-lg-1" style="margin-top: 100px">
                <div class="team_image"><img src="{{asset('image/dr/lilia2.png')}}" alt="" ></div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="intro">
    <div class="container">
        <div class="row">

            <!-- Intro Content -->
            <div class="col-lg-7">
                <div class="intro_content">
                    <div class="section_title_container">
                        {{-- <div class="section_subtitle">This is Dr Pro</div> --}}
                        <div class="section_title"><h2 style="font-size: 35px">dr. Anisa Amalia</h2></div>
                        <div class="team_title" style="font-size: 24px">Aesthetic Doctor</div>
                    </div>
                    <div style="margin-top: 40px">
                        MAIN INTEREST (S) 
                        <p>Cosmetic,  Aesthetic & Anti Aging, Laser Treatment, Ultra Layer Lift, Botox Injection. </p>
                    </div>
                    <div style="margin-top: 30px">
                        ACHIEVEMENT (S)  
                        <p>1. Dermal Filler Face Contouring Injection Training Class 2020 </p>
                        <p>2. Threadlift Double Fix Advanced Class 2021 </p>
                        <p>3. Laser Treatment & Ultrasound Training Aesthetic Medicine </p>
                    </div>
                    <div style="margin-top: 30px">
                        DOCTOR SCHEDULE 
                        <p>Tuesday, 10.00-19.00</p> 
                        <p>Friday, 10.00-19.00</p> 
                        <p>Saturday, 10.00-19.00</p> 
                    </div>

                    <!-- Milestones -->
                    {{-- <div class="milestones">
                        <div class="row milestones_row">
                        
                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
                                    <div class="milestone_text">Satisfied Patients</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="352">0</div>
                                    <div class="milestone_text">Face Liftings</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="718">0</div>
                                    <div class="milestone_text">Injectibles</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="5">0</div>
                                    <div class="milestone_text">Awards Won</div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                </div>
            </div>

            <!-- Intro Image -->
            <div class="col-lg-4 offset-lg-1" style="margin-top: 100px">
                <div class="team_image"><img src="{{asset('image/dr/anisakotak.png')}}" alt="" ></div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="intro">
    <div class="container">
        <div class="row">

            <!-- Intro Content -->
            <div class="col-lg-7">
                <div class="intro_content">
                    <div class="section_title_container">
                        {{-- <div class="section_subtitle">This is Dr Pro</div> --}}
                        <div class="section_title"><h2 style="font-size: 35px">dr. Febrina Andarini,Sp.KK</h2></div>
                        <div class="team_title" style="font-size: 24px">Dermatology and Venereology Specialist</div>
                    </div>
                    <div style="margin-top: 40px">
                        MAIN INTEREST (S) 
                        <p>Cosmetic Dermatology, Allergy Immunology and Sexually Transmitted Infection</p>
                    </div>
                    {{-- <div style="margin-top: 30px">
                        ACHIEVEMENT (S)  
                        <p>1. Dermal Filler Face Contouring Injection Training Class 2020 </p>
                        <p>2. Threadlift Double Fix Advanced Class 2021 </p>
                        <p>3. Laser Treatment & Ultrasound Training Aesthetic Medicine </p>
                    </div> --}}
                    <div style="margin-top: 30px">
                        DOCTOR SCHEDULE 
                        <p>Monday, 16.00- 19.00 </p>
                        <p>Wednesday, 16.00- 19.00 </p>
                    </div>

                    <!-- Milestones -->
                    {{-- <div class="milestones">
                        <div class="row milestones_row">
                        
                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
                                    <div class="milestone_text">Satisfied Patients</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="352">0</div>
                                    <div class="milestone_text">Face Liftings</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="718">0</div>
                                    <div class="milestone_text">Injectibles</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-md-3 milestone_col">
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="5">0</div>
                                    <div class="milestone_text">Awards Won</div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                </div>
            </div>

            <!-- Intro Image -->
            <div class="col-lg-4 offset-lg-1" style="margin-top: 100px">
                <div class="team_image"><img src="{{asset('image/dr/febkotak.png')}}" alt="" ></div>
            </div>
        </div>
    </div>
</div>


@endsection