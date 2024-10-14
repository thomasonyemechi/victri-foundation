@extends('layout.app')

@section('page_title')
@endsection

@section('page_content')
    <div class="banner mb-0">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">about us</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="/">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                about us
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="banner__element d-none d-lg-block">
                    <img src="assets/img/element-3.svg" alt="image">
                </div>
                <div class="banner__polygon d-none d-lg-block">
                    <img src="assets/img/polygon.svg" alt="image">
                </div>
            </div>
        </div>
    </div>


    <div class="donation global__py">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-9 col-lg-5 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
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

                </div>
                <div class="col-lg-6 col-12 d-lg-block position-relative aos-init mb-5 aos-animate" data-aos="fade-left"
                    data-aos-duration="1000">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid rounded" src="assets/img/about-1.jpg" alt="image">
                    </div>
                    <img class="donation__element2" src="assets/img/element.png" alt="image">
                </div>



                <div class="col-12 col-md-12 col-lg-12 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                    <p class="donation__desc global__desc m-0 mb-3">
                        At victri foudation, we believe that every person deserves a healthy life, clear vision, and a safe
                        birth. We are dedicated to providing essential healthcare services, offering vision care to those in
                        need, and supporting mothers and babies through safe and dignified childbirth.
                    </p>


                    <p class="donation__desc global__desc m-0 mb-3">
                        With consideration of our previous outreaches, we already hold some recognition and good
                        connections with many schools located in Akure, Ondo. As we pursue this campaign, overtime
                        our reach will naturally expand as the good word of our work is carried out. Currently, there are
                        a little over 1000 public and private schools in the city, which we expect to initiate a minimum of
                        10% into our campaign project. These schools will be the starting point that encourages further
                        participation of other schools in the area. Over the coming years we hope to continue our
                        campaign in more LGA’s both within and out of state.

                    </p>
                </div>

            </div>
        </div>
    </div>





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



    <div class="donation global__py pt-50">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-12  d-lg-block position-relative aos-init aos-animate" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img class="donation__element" src="assets/img/element.png" alt="image">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid rounded-circle" src="assets/img/aab.png" alt="image">
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-5 aos-init aos-animate" data-aos="fade-right"
                    data-aos-duration="1000">
                    <h3 class="global__text">Our Director</h3>
                    <h2 class="donation__heading global__heading">
                        Victor Nnoruga
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
@endsection
