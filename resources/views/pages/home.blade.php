@extends('layouts.app')

@section('title')
    NOMADS | Home
@endsection

@section('content')
<!-- Start Header -->
<header class="text-center">
    <h1>Explore The Beautiful World<br>As Easy One Click</h1>
    <p>You will see beutiful<br>moment you never see before</p>
    <a href="{{ url('/') }}" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>
<!-- End Header -->

<!-- Start Content -->
<main>
    <!-- Start Statics -->
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    <!-- End Statics -->

    <!-- Start Popular -->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>Something that you never try<br>before in this world</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popular-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url(frontend/images/place/popular-1.jpg);">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ url('detail') }}" class="btn btn-travel-detail px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url(frontend/images/place/popular-2.jpg);">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO, MALANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-detail px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url(frontend/images/place/popular-3.jpg);">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">NUSA PENINDA</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-detail px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url(frontend/images/place/popular-4.jpg);">
                        <div class="travel-country">MIDDLE EAST</div>
                        <div class="travel-location">DUBAI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ url('detail') }}" class="btn btn-travel-detail px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular -->

    <!-- Start Network -->
    <section class="section-network">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Network</h2>
                    <p>Companies are trusted us<br>more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{ url('frontend/images/logo/logo_partner.png') }}" alt="Logo Partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>
    <!-- End Network -->

    <!-- Start Testimonial -->
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They are loving Us</h2>
                    <p>Moment were giving them<br>the best experience</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <section class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ url('frontend/images/avatar/testimonial-1.png') }}" alt="User"
                                class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonial">
                                " it was glorious and i could not stop to say wohoo for every single moment
                                Dankeeeeee "
                            </p>
                        </div>
                        <hr>
                        <h2 class="trip-to mt-2">
                            Trip to Ubud
                        </h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ url('frontend/images/avatar/testimonial-2.png') }}" alt="User"
                                class="mb-4 rounded-circle">
                            <h3 class="mb-4">Shayna</h3>
                            <p class="testimonial">
                                " The trip was amazing and i saw something beautiful in that island that makes me
                                want
                                to learn more "
                            </p>
                        </div>
                        <hr>
                        <h2 class="trip-to mt-2">
                            Trip to Nusa Penida
                        </h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ url('frontend/images/avatar/testimonial-3.png') }}" alt="User"
                                class="mb-4 rounded-circle">
                            <h3 class="mb-4">Sabrhina</h3>
                            <p class="testimonial">
                                " I loved it when the waves was shaking harder - i was scared too "
                            </p>
                        </div>
                        <hr>
                        <h2 class="trip-to mt-2">
                            Trip to Karimun Jawa
                        </h2>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial -->
</main>
<!-- End Content -->
@endsection