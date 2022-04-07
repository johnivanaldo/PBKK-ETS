@extends('layouts.home-white')
@section('title')
Home
@endsection
@section('content')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4>Rent</h4>
                    <p>Rent stuffs from someone.</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4>Lend</h4>
                    <p>Rent your stuffs to someone</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4>Warranty</h4>
                <p>No rental item will go missing, broken, or not returned.</p>
            </div>
            </div>
        </div>
</section><!-- End Services Section -->

@endsection