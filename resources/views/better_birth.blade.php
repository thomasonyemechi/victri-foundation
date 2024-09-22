@extends('layout.app')


@section('page_title')
@endsection


@section('page_content')
    <link rel="stylesheet" href="{{ asset('cdn.jsdelivr.net/npm/swiper%4010/swiper-bundle.min.css') }}">


    <header class="hero__two">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="d-flex align-items-center">
                        <img class="hero__two-i" src="assets/img/8start.svg" alt="icon">
                        <h4 class="global__rise">improving maternal and newborn health
                        </h4>
                    </div>
                    <h1 class="global__title global__title-dark">Better Births: Ensuring Safe and Healthy Beginnings</h1>
                    <p class="global__desc">
                        At {{ env('APP_NAME') }}, we believe that every mother deserves the right to a safe and dignified
                        childbirth experience.
                    </p>
                    <p class="global__desc">
                        Our Better Births program is dedicated to improving maternal and newborn health by providing
                        comprehensive prenatal, delivery, and postnatal care to ensure that every birth is a safe and
                        healthy one.
                    </p>
                </div>
                <div class="col-12 col-md-5 d-none d-lg-block">
                    <img class="img-fluid" src="assets/img/dots.svg" alt="dots image">
                    <div class="hero__frame">
                        {{-- <img class="img-fluid hero__frame-circle" src="assets/img/circul-1.png" alt="circle image"> --}}
                        <img class="img-fluid rounded-circle" src="assets/img/b2.png" alt="image">

                        <img class="hero__frame-lines" src="assets/img/line.svg" alt="image">

                    </div>
                </div>
            </div>
        </div>
    </header>






    <div class="mission">
        <div class="container p-sm-0">
            <div class="row mission__mb">
                <div class="col-12 m-auto d-md-flex justify-content-between align-items-center">
                    <h2 class="global__heading text-light m-0">Our Approach
                    </h2>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pe-md-4">
                    <div class="mission__card global__white aos-init" data-aos="fade-left" data-aos-duration="1000">
                        <div class="global__icon global__icon-wmedium mission__card-icon mb-auto mx-0">
                            {{-- <img src="assets/img/donation-2.svg" alt="image" style="height: 32px; width: 32px;"> --}}
                        </div>
                        <div class="">
                            <h3 class="mission__card-heading global__heading">Comprehensive Prenatal Care</h3>
                            <p class="mission__card-desc global__desc mt-3 mb-0">
                                Healthy births start with healthy pregnancies. Our program offers expectant mothers
                                essential prenatal checkups, education, and nutritional guidance. We help monitor the
                                well-being of both mother and baby throughout pregnancy to identify and address potential
                                health risks early
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ps-md-4">
                    <div class="mission__card global__white aos-init" data-aos="fade-right" data-aos-duration="1000">
                        <div class="global__icon global__icon-wmedium mission__card-icon mb-auto mx-0">
                            {{-- <img src="assets/img/hands.svg" alt="image" style="height: 32px; width: 32px;"> --}}
                        </div>
                        <div class="">
                            <h3 class="mission__card-heading global__heading">Safe Delivery Practices</h3>
                            <p class="mission__card-desc global__desc mt-3 mb-0">
                                We work with skilled healthcare professionals to ensure that every birth is safe, whether at
                                home or in a hospital setting. Our trained birth attendants, nurses, and midwives are
                                equipped to handle routine deliveries as well as emergency situations, reducing the risk of
                                complications for both mother and child.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ps-md-4">
                    <div class="mission__card global__white aos-init" data-aos="fade-right" data-aos-duration="1000">
                        <div class="global__icon global__icon-wmedium mission__card-icon mb-auto mx-0">
                            {{-- <img src="assets/img/hands.svg" alt="image" style="height: 32px; width: 32px;"> --}}
                        </div>
                        <div class="">
                            <h3 class="mission__card-heading global__heading"> Postnatal Care and Support</h3>
                            <p class="mission__card-desc global__desc mt-3 mb-0">
                                The journey doesn’t end with childbirth. Our postnatal care services ensure that both mother
                                and baby receive the attention they need after delivery. We offer newborn care,
                                breastfeeding support, and regular health checkups for mothers to ensure recovery and
                                bonding with their babies
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>






    <!-- About START -->
    <div class="about testimonial">
        <div class="container p-sm-0">
            <div class="row">

                <div class="col-12 col-md-9 col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="about__heading global__heading">
                        Why Better Births Matter

                    </h2>
                    <p class="about__desc global__desc mb-3">
                        Preventable complications during pregnancy and childbirth are still a leading cause of death for
                        women and newborns in many communities. Our Better Births program addresses this by providing access
                        to quality maternal care, educating families on safe pregnancy practices, and ensuring that every
                        mother has the support she needs before, during, and after childbirth

                    </p>




                    <div class="">

                        <p class="  mt-3 fw-bold h3 mb-0">Our Key Focus Areas:.</p>


                        <ul class="about__list">
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.svg" alt="icon">
                                <span class="global__desc m-0">
                                    <span class="fw-bold"> Access to Skilled Care:</span> Ensuring that every woman has
                                    access to qualified health professionals during pregnancy and delivery.
                                </span>
                            </li>
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.svg" alt="icon">
                                <span class="global__desc m-0">
                                    <span class="fw-bold"> Maternal Education:</span> Teaching mothers about the importance
                                    of prenatal care, nutrition, and safe birthing practices.
                                </span>
                            </li>
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.svg" alt="icon">
                                <span class="global__desc m-0">
                                    <span class="fw-bold"> Community Outreach: </span> Reaching underserved areas to provide
                                    maternal care and education to those who need it most.
                                </span>
                            </li>


                        </ul>
                    </div>
                </div>

                <div class="col-6 my-auto my-xl-0">
                    <div class="d-none d-lg-flex gap-4" data-aos="fade-right" data-aos-duration="1000">
                        <div class="about__image">
                            <img class="img-fluid" src="assets/img/b5.png" alt="image">
                        </div>
                        <div class="about__image">
                            <img class="img-fluid" src="assets/img/b4.png" alt="image">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>




    <header class="hero__three" style="background-image: url(assets/img/b3.png);">
        <div class="hero__three-layer">
            <div class="container p-sm-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-7">
                        <div class="d-flex align-items-center">
                            <img class="hero__two-i" src="assets/img/8start.svg" alt="icon">
                            <h4 class="global__rise hero__three-gray">
                                Get Involved in Better Birth Initiatives
                            </h4>
                        </div>
                        <h1 class="global__title">
                            Healthy Pregnancies, <br> Safe Deliveries, Bright Futures
                        </h1>
                        <p class="global__desc hero__three-gray">
                            Join us in our mission to reduce maternal and infant mortality by ensuring every mother has
                            access to life-saving care
                            <br>
                            Our Better Births program ensures that every woman receives the prenatal, delivery, and
                            postnatal care she deserves for a safe and healthy childbirth

                        </p>


                        <div class="hero__three-gray mb-5">
                            <h3 class="fw-bold" >Resources to help you through every stage of your pregnancy and birth:</h3>

            


                            <ul class="about__list">
                                <li>Healthy Pregnancy Tips</li>
                                <li>Nutrition plans During Pregnancy</li>
                                <li>Postnatal Care for You and Your Baby</li>
                            </ul>
                        </div>
                        <a href="/contact" class="global__btn me-2 hero__two-btn">Enroll Now !
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </header>





    <div class="donation global__py pt-50">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 d-none d-lg-block position-relative aos-init aos-animate" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img class="donation__element" src="assets/img/element.png" alt="image">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid rounded-circle" src="assets/img/joana.jpg" alt="image">
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-5 aos-init aos-animate" data-aos="fade-right"
                    data-aos-duration="1000">
                    <h3 class="global__text">Something About Our Expert</h3>
                    <h2 class="donation__heading global__heading">
                        Joanna Francis
                    </h2>
                    <p class="donation__desc global__desc mb-3">The evidence is clear. The ability to learn to read is
                        the single most significant factor to allow a child to reach
                        their full potential.</p>
                    <p class="donation__desc global__desc m-0 mb-3">At USA Reads, we strive to close the literacy gap and
                        see
                        kids discover a love and habit of reading. We are specifically
                        focused on children from African American, Latino, ethnic minorities and low-income backgrounds.
                    </p>


                    <p class="donation__desc global__desc mb-3">The evidence is clear. The ability to learn to read is
                        the single most significant factor to allow a child to reach
                        their full potential.</p>



                    <div class="footer__social pt-50">
                        <ul class="footer__social-ul">
                            <li>
                                <a class="footer__social-link" href="https://www.facebook.com/"><i
                                        class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="footer__social-link" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a class="footer__social-link" href="https://www.instagram.com/"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a class="footer__social-link" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="assets/js/swiper.js"></script>
@endpush
