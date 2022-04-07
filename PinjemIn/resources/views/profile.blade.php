@extends('layouts.home-white')
@section('title')
Home
@endsection
@section('content')
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2><strong>Profile</strong></h2>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="~/Content/img/about.jpg" class="img-fluid" style="max-height:500px; max-width:500px;" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>PinjemIn offers solution for your rental needs</h3>
                
                <ul>
                    <li>
                        <i class="bx bx-store-alt"></i>
                        <div>
                            <h5><strong>Fast and Easy</strong></h5>
                            <p>Sign Up, Search Stuffs, Rent</p>
                        </div>
                    </li>
                    <li>
                        <i class="bx bx-images"></i>
                        <div>
                            <h5><strong>Have some spare?</strong></h5>
                            <p>You can list your goods for others to rent</p>
                        </div>
                    </li>
                    <li>
                        <i class="bx bx-images"></i>
                        <div>
                            <h5><strong>Transparent and Secure</strong></h5>
                            <p>Our service will provide the maximum amount of safety for you, insurance will be provided</p>
                        </div>
                    </li>
                </ul>
               
            </div>
        </div>

    </div>
</section><!-- End About Section -->
@endsection