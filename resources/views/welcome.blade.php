@extends('layout.app')


@section('page_title')
    Optimizing
    Health Care For a Better Future
@endsection


@section('page_content')
    <link rel="stylesheet" href="{{ asset('cdn.jsdelivr.net/npm/swiper%4010/swiper-bundle.min.css') }}">


    <div class="text-center  py-2" style="background-color: #2b4c6e">
        <a href="/donate" style="text-decoration: none"> <span class="fw-bold text-white h4">
                Support Our fight against needless blindness and Visual Impairment
            </span></a>
    </div>

    <header class="hero__four py-md-0">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6 position-relative">
                    <h1 class="global__title global__title-dark">Optimizing <br> Health Care For a <span
                            class="text-success">Better</span> Future</h1>
                    <p class="global__desc">
                        At Victri Foudation, we believe in health equity, giving every person the right to a healthier life
                        from conception to the elderly and that's why we focus on safe pregnancy and childbirth, healthy
                        lifestyles and best vision.
                    </p>
                    <div class="hero__four-element">
                        <a href="/donate" class="global__btn">What we do
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-none d-lg-block position-relative">
                    <div
                        class="swiper mySwiper hero__four-slider swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper hero__four-slider--wrap" id="swiper-wrapper-70f7df9101108f7bea"
                            aria-live="polite">
                            <div class="swiper-slide hero__four-slider--img hero__four-slider--brt swiper-slide-active"
                                role="group" aria-label="1 / 4" data-swiper-slide-index="0" style="margin-right: 30px;">
                                <img class="img-fluid rounded" src="assets/img/header-3.png" style="object-fit: cover"
                                    alt="image">
                            </div>
                            <div class="swiper-slide hero__four-slider--img hero__four-slider--brb swiper-slide-next"
                                role="group" aria-label="2 / 4" data-swiper-slide-index="1" style="margin-right: 30px;">
                                <img class="img-fluid rounded" src="assets/img/header-2.png" style="object-fit: cover"
                                    alt="image">
                            </div>
                            <div class="swiper-slide hero__four-slider--img hero__four-slider--brt" role="group"
                                aria-label="3 / 4" data-swiper-slide-index="2" style="margin-right: 30px;">
                                <img class="img-fluid rounded" src="assets/img/header-1.png" style="object-fit: cover"
                                    alt="image">
                            </div>
                            <div class="swiper-slide hero__four-slider--img hero__four-slider--brb" role="group"
                                aria-label="4 / 4" data-swiper-slide-index="3" style="margin-right: 30px;">
                                <img class="img-fluid rounded" src="assets/img/header-4.png" style="object-fit: cover"
                                    alt="image">
                            </div>
                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 4"></span>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>

    </header>






    <div id="carouselExampleIndicators" class="carousel slide d-lg-none d-sm-block d-md-block" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/ss1.png" style="width: 100%; height: 300px; object-fit: cover;"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;"
                    src="assets/img/gallery/15.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/header-3.png" style="width: 100%; height: 300px; object-fit: cover;"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="row ">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/home.jpg') }}" alt="" style="object-fit: cover; width: 100%; ">
        </div>

        <div class="col-md-6">
            <div class="support ps-5">
                <h2 class="support__heading mb-2 global__heading global__heading-w">
                    Our Initiatives
                </h2>

                <span class="mb-3 global__text-w">
                    Our primary goal is to provide all communities <br> with good quality,
                    affordable and accessible  healthcare. <br>To acheive this we have implemented 3
                    core initiatives
                </span>


                <div class="row">
                    <div class="col-md-8 offset-lg-1">
                        <div class="row mt-3 ">

                            <div class="col-md-12 aos-init mb-3 aos-animate" data-aos="fade-left"
                                data-aos-duration="1000">
                                <div class="support__card py-1 global__white" style="text-align: left !important">

                                    <div class="">
                                        <a href="/better-vision" style="text-decoration: none;">
                                            <h3 class="support__card-heading text-left global__heading">Better Vision</h3>
                                        </a>
                                        <p class="support__card-desc text-left  mt-1 mb-0">
                                            Our vision program provides screenings, eye surgeries, and prescription glasses
                                            to
                                            improve the lives of children and adults alike.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 aos-init mb-3 aos-animate" data-aos="fade-left"
                                data-aos-duration="1000">
                                <div class="support__card py-1 global__white" style="text-align: left !important">

                                    <div class="">
                                        <a href="/better-birth" style="text-decoration: none;">
                                            <h3 class="support__card-heading global__heading">Better Births Nigeria</h3>
                                        </a>
                                        <p class="support__card-desc global__desc mt-3 mb-0">
                                            Our maternity health program offers prenatal care, safe
                                            delivery practices, and postnatal support to improve birth outcomes
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 aos-init  aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                <div class="support__card py-1 global__white" style="text-align: left !important">

                                    <div class="">
                                        <a href="/better-health" style="text-decoration: none;">
                                            <h3 class="support__card-heading global__heading">Better Health</h3>
                                        </a>
                                        <p class="support__card-desc global__desc mt-3 mb-0">
                                            We offer critical healthcare services to those who need it most, focusing on
                                            preventive
                                            care, treatment of common illnesses.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>



    </div>




    <div class="donation global__py">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-9 col-lg-5 aos-init aos-animate" data-aos="fade-right"
                    data-aos-duration="1000">
                    <h3 class="global__text">about victri foudation</h3>
                    <h2 class="donation__heading global__heading">
                        Helping each other can make world better
                    </h2>
                    <p class="donation__desc global__desc m-0 mb-3">
                        At victri foudation, we believe that every person deserves a healthy life, clear vision, and a safe
                        birth. We are dedicated to providing essential healthcare services, offering vision care to those in
                        need, and supporting mothers and babies through safe and dignified childbirth.
                    </p>

                    <p class="donation__desc global__desc m-0">
                        Our comprehensive approach ensures that no one is left behind, regardless of their circumstances or
                        location.
                    </p>
                    <div class="donation__mt mb-5">
                        <div class="">
                            <a href="/about" class="donation__btn global__btn m-0">Learn More About Us</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-12  position-relative aos-init aos-animate" data-aos="fade-left"
                    data-aos-duration="1000">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid rounded" style="width: 100%" src="assets/img/about-1.jpg" alt="image">
                    </div>
                </div>

            </div>
        </div>
    </div>








    {{-- <div class="num">
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
    </div> --}}
    <!-- Num END -->

    <!-- Testimonial START -->
    <div class="testimonial">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">Victri Stories</h3>
                    <h2 class="global__heading">What people say about us
                    </h2>
                </div>
            </div>

            <div class="testimonial__body">
                <div class="testimonial__body-slider">
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <p class="global__desc testimonial__card-desc">
                                    Before the surgery, I could barely see the board at school. I struggled every day, but I
                                    didn’t know why. Thanks to the victri foundation, I got the help I needed, and now I can
                                    see
                                    clearly! I’m doing better in school, and I love reading my favorite books again. This
                                    foundation gave me the gift of sight, and I will always be grateful.
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <h4 class="testimonial__card-name"> Blessiing Faloye, (15 years old)</h4>
                                        <span class="testimonial__card-type">
                                            A Child’s New Beginning
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <p class="testimonial__card-desc global__desc">
                                    Losing my vision felt like losing my independence. I feared I wouldn’t be able to work
                                    or care for my family anymore. But after receiving cataract surgery through the
                                    foundation, everything changed. I can see my children smile, and I’ve gone back to work.
                                    They didn’t just restore my sight; they gave me my life back
                                </p>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="testimonial__card-name">Alashoadura David, 47 years old</h4>
                                        <span class="testimonial__card-type">
                                            A Father’s Renewed Vision
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial__card">

                            <div class="">
                                <p class="testimonial__card-desc global__desc">
                                    Volunteering with victri foundation has been one of the most rewarding experiences of my
                                    life. Seeing the joy and relief in people’s eyes after they receive treatment is
                                    indescribable. Victri foundation’s work is truly life-changing, not only for those
                                    receiving care but for all of us who get to be part of this incredible mission
                                </p>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="testimonial__card-name">Abe Ifeoluwa, Volunteer</h4>
                                        <span class="testimonial__card-type">
                                            A Volunteer’s Perspective
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <p class="global__desc testimonial__card-desc">Campoal is great for people to
                                    bring
                                    changes to what
                                    they believe in, it’s nice to see
                                    some good morals and common sense
                                    being acknowledge where modern governments etc fail.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="assets/img/client-1.png" alt="user">
                                    <div class="ps-3">
                                        <h4 class="testimonial__card-name">Priscilla Lucas</h4>
                                        <span class="testimonial__card-type">
                                            Founder
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- Team START-->
    {{-- <div class="team global__py">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">our team</h3>
                    <h2 class="global__heading">Our Professional Team
                    </h2>
                </div>
            </div>

            <div class="team__grid">
                <!-- User 01 -->
                <div class="team__card">
                    <div class="team__card-head">
                        <img class="img-fluid" src="assets/img/o2.png" alt="user image">
                        <div class="team__card-head--social">
                            <ul class="">
                                <li><a class="team__card-head--link" href="https://www.facebook.com/"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://linkedin.com/"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://www.instagram.com/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://twitter.com/"><i
                                            class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="team__user">Victor Nnoruga</a>
                        <p class="team__cate">Director</p>
                    </div>
                </div>
                <!-- User 02 -->
                <div class="team__card">
                    <div class="team__card-head">
                        <img class="img-fluid" src="assets/img/o4.png" alt="user image">
                        <div class="team__card-head--social">
                            <ul class="">
                                <li><a class="team__card-head--link" href="https://www.facebook.com/"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://linkedin.com/"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://www.instagram.com/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://twitter.com/"><i
                                            class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="team__user">Trinity Francis</a>
                        <p class="team__cate">Outreach Director</p>
                    </div>
                </div>
                <!-- User 03 -->
                <div class="team__card">
                    <div class="team__card-head">
                        <img class="img-fluid" src="assets/img/o3.png" alt="user image">
                        <div class="team__card-head--social">
                            <ul class="">
                                <li><a class="team__card-head--link" href="https://www.facebook.com/"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://linkedin.com/"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://www.instagram.com/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://twitter.com/"><i
                                            class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="team__user">Joanna Francis</a>
                        <p class="team__cate">Medical Expert</p>
                    </div>
                </div>
                <!-- User 04 -->
                <div class="team__card">
                    <div class="team__card-head">
                        <img class="img-fluid" src="assets/img/o1.png" alt="user image">
                        <div class="team__card-head--social">
                            <ul class="">
                                <li><a class="team__card-head--link" href="https://www.facebook.com/"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://linkedin.com/"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://www.instagram.com/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li><a class="team__card-head--link" href="https://twitter.com/"><i
                                            class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="team__user">Abe Ifeoluwa</a>
                        <p class="team__cate">Volunteer</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team END -->





    <header class="hero__three" style="background-image: url(../img/header-img-3.png);">
        <div class="hero__three-layer">
            <div class="container p-sm-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">

                        <h1 class="global__title">
                            Join Us in <br> Making a Difference
                        </h1>


                        <a href="/donate" class="btn  mt-3   px-2 py-2"
                            style="background-color: #20c997 !important; color: #2b4c6e">
                            <span class="rounded fw-bold px-3 py-1" style="border: 1px solid white;">
                                Donate
                            </span>
                        </a>


                        <p class="global__desc hero__three-gray">
                            Whether you’re donating, volunteering, or partnering with us, your contribution can help us
                            bring better health, vision, and birth outcomes to those in need

                        </p>

                        <div class="hero__three-gray mb-5">
                            <span class="fw-bold">Donate:</span> Your donation funds vital healthcare services, eye
                            surgeries, and maternity care. <br>
                            <span class="fw-bold">Volunteer:</span> Lend your time and skills to help transform lives. <br>
                            <span class="fw-bold">Partner with Us:</span> Collaborate with us to extend our reach and
                            impact <br>
                        </div>
                        <a href="/donate" class="global__btn me-2 hero__two-btn">Volunteer
                        </a>

                        <a href="#" class="global__btn me-2 hero__two-btn">Careers
                        </a>
                        <a href="#" class="global__btn me-2 hero__two-btn">Partners
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </header>






    {{-- <div class="gallery global__py pb-0">
        <div class="container p-sm-0">
            <div class="row">


                <div class="row">
                    <div class="col-12 col-md-9 col-lg-7 text-center m-auto aos-init aos-animate" data-aos="fade-down"
                        data-aos-duration="1000">
                        <h3 class="global__text">Our Gallery</h3>
                        <h2 class="global__heading">We create events for children and gather for support
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-12 col-md-6 gallery__body-two aos-init" data-aos="fade-right" data-aos-duration="1000">
                    <div class="mb-4">
                        <a class="gallery__body-layer d-block vbox-item" data-gall="gallery01" href="assets/img/dds.png">
                            <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/dds.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 gallery__body-two aos-init" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-4 mb-md-0">
                            <a class="gallery__body-layer d-block vbox-item" data-gall="gallery01"
                                href="assets/img/gallery/g1.png">
                                <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/gallery/g1.png"
                                    alt="image">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 mb-4 mb-md-1">
                            <a class="gallery__body-layer d-block vbox-item" data-gall="gallery01"
                                href="assets/img/gallery/g2.png">
                                <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/gallery/g2.png"
                                    alt="image">
                            </a>
                        </div>
                        <div class="col-12 col-sm-12 mt-md-3 mt-xxl-4">
                            <a class="gallery__body-layer d-block vbox-item" data-gall="gallery01"
                                href="assets/img/gallery/g3.jpg">
                                <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/gallery/g3.jpg"
                                    alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="news global__py">
        <div class="container p-sm-0">
            <div class="row">
                <!-- Left Side -->
                <div class="col-xl-8 d-flex d-xl-block justify-content-center mb-4 mb-xl-0">
                    <div class="news__card">
                        <div class="news__card-img">
                            <a href="blog-details.html">
                                <img class="img-fluid news__card-img--round" src="assets/img/news-img-1.png" alt="image">
                            </a>
                            <h4 class="news__card-tag">Education</h4>
                        </div>
                        <div class="card-body px-0 py-2 pe-sm-4">
                            <div class="">
                                <span class="news__card-span">October 25, 2023</span>
                            </div>
                            <div class="">
                                <a href="blog-details.html" class="news__card-title">
                                    Everything You Need to Know About Crowdfunding for Kids With Cancer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-xl-4 d-sm-flex d-xl-block justify-content-center gap-5">
                    <div class="news__card mb-4 mb-sm-0 mb-lg-4">
                        <div class="news__card-img">
                            <a href="blog-details.html">
                                <img class="img-fluid" src="assets/img/news-img-2.png" alt="image">
                            </a>
                            <h4 class="news__card-tag">health</h4>
                        </div>
                        <div class="card-body px-0 py-2">
                            <div class="">
                                <span class="news__card-span">October 25, 2023</span>
                            </div>
                            <div class="">
                                <a href="blog-details.html" class="news__card-title">The study changed the health of a
                                    generation</a>
                            </div>
                        </div>
                    </div>
                    <div class="news__card">
                        <div class="news__card-img">
                            <a href="blog-details.html">
                                <img class="img-fluid" src="assets/img/news-img-3.png" alt="image">
                            </a>
                            <h4 class="news__card-tag">Donation</h4>
                        </div>
                        <div class="card-body px-0 py-2">
                            <div class="">
                                <span class="news__card-span">October 25, 2023</span>
                            </div>
                            <div class="">
                                <a href="blog-details.html" class="news__card-title">How to Write Your GoFundMe
                                    Fundraiser Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <script src="assets/js/swiper.js"></script>
@endpush
