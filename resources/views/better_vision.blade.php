@extends('layout.app')


@section('page_title')
@endsection


@section('page_content')
    <link rel="stylesheet" href="{{ asset('cdn.jsdelivr.net/npm/swiper%4010/swiper-bundle.min.css') }}">


    <header class="hero__three">
        <div class="hero__three-layer">
            <div class="container p-sm-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="d-flex align-items-center">
                            <img class="hero__two-i" src="assets/img/8start.svg" alt="icon">
                            <h4 class="global__rise hero__three-gray">
                                See the Change Your Donation Can Make
                            </h4>
                        </div>
                        <h1 class="global__title">
                            Be the reason someone sees again
                        </h1>
                        <p class="global__desc hero__three-gray">
                            Every dollar brings us closer to a world where blindness is preventable. Your generosity makes
                            this possible
                        </p>
                        <a href="/donate" class="global__btn hero__three-btn">Donate Now
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </header>




    <!-- About START -->
    <div class="about global__py">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-lg-6 my-auto my-xl-0">
                    <div class="d-flex d-lg-flex gap-4" data-aos="fade-right" data-aos-duration="1000">
                        <div class="about__image">
                            <img class="img-fluid" src="assets/img/goal1.png" alt="image">
                        </div>
                        <div class="about__image">
                            <img class="img-fluid" src="assets/img/goal2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="about__heading global__heading">
                        Our Better Vision Initiative

                    </h2>
                    <p class="about__desc global__desc mb-3">
                        At VICTRI FOUNDATION, we believe that clear vision is essential for a better life. Our Better
                        Vision initiative aims to provide access to quality eye care services, promote eye health
                        awareness, and support research to combat vision impairments.

                    </p>



                    <p class="about__desc global__desc mb-3">
                        Our Mission is to ensure everyone has the opportunity to see the world clearly, regardless of their
                        background or financial situation.
                    </p>

                    <div class="">

                        <p class="  mt-3 fw-bold h3 mb-0">Better Vision Objectives.</p>


                        <ul class="about__list">
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.svg"
                                    alt="icon">
                                <span class="global__desc m-0">
                                    Provide free eye tests and consultations to underserved communities
                                </span>
                            </li>
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.svg"
                                    alt="icon">
                                <span class="global__desc m-0">
                                    Distribute free frames and discounted lenses to those in need
                                </span>
                            </li>
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.svg"
                                    alt="icon">
                                <span class="global__desc m-0">
                                    Educate the public on eye health and prevention of vision impairments
                                </span>
                            </li>

                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.svg"
                                    alt="icon">
                                <span class="global__desc m-0">
                                    Support research and development of new treatments for eye diseases
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="num">
        <div class="container p-sm-0">
            <div class="num__body">
                <div class="">
                    <h4 class="num__body-digit"><span class="num__counter">5790</span>+</h4>
                    <p class="num__body-text">People Reached</p>
                </div>
                <div class="">
                    <h4 class="num__body-digit">$<span class="num__counter">2600</span>+</h4>
                    <p class="num__body-text">Dispensed Drugs</p>
                </div>
                <div class="">
                    <h4 class="num__body-digit"><span class="num__counter">50</span>+ </h4>
                    <p class="num__body-text">Volunteers</p>
                </div>
                <div class="">
                    <h4 class="num__body-digit"><span class="num__counter">500</span>+</h4>
                    <p class="num__body-text">Glasses Dispensed</p>
                </div>
            </div>
        </div>
    </div>



    <div class="org global__py pt-50">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-7 text-center m-auto service__m" data-aos="fade-down"
                    data-aos-duration="1000">
                    <h2 class="global__heading m-0">Better Vision Goals for this year
                    </h2>
                    <p class="org__desc global__desc mt-3 mb-0">Our overall strategy is for the long-term, these
                        are the goals we expect in our initial stages.</p>
                </div>
            </div>
            <div class="row align-items-xl-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <ul>
                        <li class="org__li">
                            <div class="org__li-img">
                                <img class="org__li-img--icon" src="assets/img/money.svg" alt="">
                            </div>
                            <div class="">
                                <h3 class="org__li-name">108 Schools Initiated By 3rd Quarter</h3>
                                <p class="org__desc global__desc mt-2 mb-0">
                                    10% of all schools in Akure are participants of
                                    our campaign project by the end of 2024.

                                </p>
                            </div>
                        </li>
                        <li class="org__li">
                            <div class="org__li-img">
                                <img class="org__li-img--icon" src="assets/img/money.svg" alt="">
                            </div>
                            <div class="">
                                <h3 class="org__li-name">We Reach 54,000 Students</h3>
                                <p class="org__desc global__desc mt-2 mb-0">Averaging around 500 students per school, we
                                    strive to meet the needs of all participants.</p>
                            </div>
                        </li>
                        <li class="org__li">
                            <div class="org__li-img">
                                <img class="org__li-img--icon" src="assets/img/money.svg" alt="">
                            </div>
                            <div class="">
                                <h3 class="org__li-name">Fundraise N2 Million for Support</h3>
                                <p class="org__desc global__desc mt-2 mb-0">Raising finances for our efforts will mean that
                                    we can grow our campaign in the near future.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 d-sm-block mt-5 mt-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img class="img-fluid" src="assets/img/draw-img.png" alt="image">
                </div>
            </div>
        </div>
    </div>






 
@endsection


@push('scripts')
    <script src="assets/js/swiper.js"></script>
@endpush
