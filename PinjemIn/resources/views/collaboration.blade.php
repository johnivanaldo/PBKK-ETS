@extends('layouts.home-white')
@section('title')
Home
@endsection
@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2><strong>Collaboration Proposal</strong></h2>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="~/Content/img/about.jpg" class="img-fluid" style="max-height:500px; max-width:500px;" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Regarding Collaboration</h3>
                <p class="fst-italic">
                    Our product will be available soon. We are welcome to any opportunity for collaboration and investment. For further
                    information, please contact us.
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

@endsection