@extends('layout.app')


@section('page_title')
@endsection


@section('page_content')
    <link rel="stylesheet" href="{{ asset('cdn.jsdelivr.net/npm/swiper%4010/swiper-bundle.min.css') }}">



    <header class="hero__four">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6 position-relative">
                    <div class="d-flex align-items-center">
                        <img class="hero__two-i" src="assets/img/8start.svg" alt="icon">
                        <h4 class="global__rise">Better Vision, Better Birth, Better Health
                        </h4>
                    </div>
                    <h1 class="global__title global__title-dark">Change the world by helping the people</h1>
                    <p class="global__desc">
                        From health and vision care to safe childbirth, we’re committed to improving lives at every stage.
                        Join us in our mission for better outcomes
                    </p>
                    <div class="hero__four-element">
                        <a href="/donate" class="global__btn">Donate Now
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>
                        <img class="img-fluid d-none d-lg-block" src="assets/img/element-2.png" alt="image">
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







    <div class="support">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="support__heading mb-0 global__heading global__heading-w">
                        Our Initiatives
                    </h2>

                    <h3 class="mb-5 mt-2 small global__text-w">
                        Our primary goal is to provide all communities with good quality,
                        affordable and accessible healthcare. In line with our company objectives, we have implemented 3
                        key initiative
                    </h3>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-xl-4 aos-init" data-aos="fade-left" data-aos-duration="1000">
                    <div class="support__card global__white">
                        <div class="global__icon support__card-icon">
                            <img src="assets/img/health-icon.svg" alt="image" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <a href="/better-vision">
                                <h3 class="support__card-heading global__heading">Better Vision</h3>
                            </a>
                            <p class="support__card-desc global__desc mt-3 mb-0">
                                Preventable blindness affects millions, but with the right care, many can regain their
                                sight. Our vision program provides screenings, eye surgeries, and prescription glasses to
                                improve the lives of children and adults alike.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 aos-init" data-aos="fade-right" data-aos-duration="1000">
                    <div class="support__card global__white">
                        <div class="global__icon support__card-icon">
                            <img src="assets/img/cap-icon.svg" alt="image" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <a href="/better-birth">
                                <h3 class="support__card-heading global__heading">Better Births Nigeria</h3>
                            </a>
                            <p class="support__card-desc global__desc mt-3 mb-0">
                                We support mothers and babies through every step of their journey by ensuring safe,
                                dignified, and healthy childbirths. Our maternal health program offers prenatal care, safe
                                delivery practices, and postnatal support to improve birth outcomes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 aos-init" data-aos="fade-right" data-aos-duration="1000">
                    <div class="support__card global__white">
                        <div class="global__icon support__card-icon">
                            <img src="assets/img/heart-icon.svg" alt="image" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <a href="/better-health">
                                <h3 class="support__card-heading global__heading">Better Health</h3>
                            </a>
                            <p class="support__card-desc global__desc mt-3 mb-0">
                                We offer critical healthcare <br> services to those who need it most, <br>focusing on
                                preventive
                                care, treatment of common illnesses, <br> and ensuring that every individual can lead a
                                healthier
                                life.
                            </p>
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
                    <div class="donation__mt">
                        <div class="">
                            <a href="/about" class="donation__btn global__btn m-0">Learn More</a>
                        </div>
                        <div class="donation__video">
                            <a class="donation__video-btn video__card venobox vbox-item" data-vbtype="video"
                                href="https://youtu.be/ts8d8kKjHD4">
                                <i class="fa-solid fa-circle-play donation__video-waves--player"></i>
                                <div class="donation__video-waves">
                                    <div class="donation__video-waves--div donation__video-waves--one"></div>
                                    <div class="donation__video-waves--div donation__video-waves--two"></div>
                                    <div class="donation__video-waves--div donation__video-waves--three"></div>
                                </div>
                            </a>
                            <h4 class="donation__video-text global__desc">Watch Our Activity</h4>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-none d-lg-block position-relative aos-init aos-animate" data-aos="fade-left"
                    data-aos-duration="1000">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid rounded" src="assets/img/about-1.jpg" alt="image">
                    </div>
                    <img class="donation__element2" src="assets/img/element.png" alt="image">
                </div>

            </div>
        </div>
    </div>





    <div class="mission">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-md-6 pe-md-4">
                    <div class="mission__card global__white aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1000">
                        <div class="global__icon global__icon-wmedium mission__card-icon mb-auto mx-0">
                            <img src="assets/img/donation-2.svg" alt="image" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <h3 class="mission__card-heading global__heading">Our Vision</h3>
                            <p class="mission__card-desc global__desc mt-3 mb-0">
                                We envision a global community where every <br> family thrives through access to better
                                health,
                                restored vision, and safe, dignified birth experiences
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-md-4">
                    <div class="mission__card global__white aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="1000">
                        <div class="global__icon global__icon-wmedium mission__card-icon mb-auto mx-0">
                            <img src="assets/img/hands.svg" alt="image" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <h3 class="mission__card-heading global__heading">Our Mission</h3>
                            <p class="mission__card-desc global__desc mt-3 mb-0">
                                To improve the quality of life for children and families <br> by offering essential
                                healthcare,
                                vision restoration, and maternal care that leads to safe and healthy outcomes
                            </p>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-5 ps-md-4">
                    <div class="d-flex justify-content-center ">
                        <a href="/donate" class="global__btn hero__three-btn">Support the Cause, Donate Now and <br>
                            Help Us Realize Our Vision
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- About START -->
    <div class="about global__py">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-6 my-auto my-xl-0">
                    <div class="d-none d-lg-flex gap-4" data-aos="fade-right" data-aos-duration="1000">
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

                    <div class="mb-3">

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

                    <div class="">
                        <a href="/better-vision" class="global__btn " style="margin-top: 10px">More About
                            Better Vision
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>
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
                    <h3 class="global__text">Testimonials</h3>
                    <h2 class="global__heading">What people say's about us
                    </h2>
                </div>
            </div>

            <div class="testimonial__body">
                <div class="testimonial__body-slider">
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

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
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

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
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

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
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

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
    <div class="team global__py">
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
    </div>
    <!-- Team END -->



    

    <header class="hero__three" style="background-image: url(../img/header-img-3.png);">
        <div class="hero__three-layer">
            <div class="container p-sm-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-7">
                        <div class="d-flex align-items-center">
                            <img class="hero__two-i" src="assets/img/8start.svg" alt="icon">
                            <h4 class="global__rise hero__three-gray">
                                Get Involved
                            </h4>
                        </div>
                        <h1 class="global__title">
                            Join Us in <br> Making a Difference
                        </h1>
                        <p class="global__desc hero__three-gray">
                            Whether you’re donating, volunteering, or partnering with us, your contribution can help us bring better health, vision, and birth outcomes to those in need
                         
                        </p>

                        <div class="hero__three-gray mb-5">
                            <span class="fw-bold">Donate:</span> Your donation funds vital healthcare services, eye surgeries, and maternal care. <br>
                            <span class="fw-bold">Volunteer:</span> Lend your time and skills to help transform lives. <br>
                                <span class="fw-bold">Partner with Us:</span> Collaborate with us to extend our reach and impact <br>
                        </div>
                        <a href="/donate" class="global__btn me-2 hero__two-btn">Donate Now
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>

                        <a href="#" class="global__btn me-2 hero__three-btn">Volunteer
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>
                        <a href="#" class="global__btn me-2 hero__two-btn">Partner with Us
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </header>






    <div class="gallery global__py pb-0">
        <div class="container p-sm-0">
            <div class="row">


                <div class="row">
                    <div class="col-12 col-md-9 col-lg-7 text-center m-auto aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                        <h3 class="global__text">Our Gallery</h3>
                        <h2 class="global__heading">We create events for children and gather for support
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-12 col-md-6 gallery__body-two aos-init" data-aos="fade-right" data-aos-duration="1000">
                    <div class="mb-4">
                        <a class="gallery__body-layer d-block vbox-item" data-gall="gallery01"
                            href="assets/img/gallery/g4.png">
                            <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/gallery/g4.png"
                                alt="image">
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
    </div>
@endsection


@push('scripts')
    <script src="assets/js/swiper.js"></script>
@endpush
