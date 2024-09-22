@extends('layout.app')

@section('page_title')
@endsection

@section('page_content')

<div class="banner">
    <div class="banner__overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-lg-start">
                    <h1 class="global__title global__title-dark text-capitalize">contact us</h1>
                    <ul class="banner__ul">
                        <li class="banner__ul-list p-0">
                            <a class="banner__ul-link" href="/">
                                home
                            </a>
                        </li>
                        <li class="banner__ul-list">
                            contact us
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


    <div class="social global__py pt-0">
        <div class="container p-sm-0">
            <div class="row justify-content-center gap-5 gap-lg-0">
                <div class="col-12 col-sm-10 col-lg-4">
                    <div class="social__body">
                        <div class="">
                            <div class="social__body--loc"></div>
                            <div class="social__i">
                                <img class="" src="assets/img/location-i.svg" alt="image">
                            </div>
                            <div class="">
                                <h4 class="social__text">Our Location</h4>
                                <p class="social__number"> {{ env('APP_ADDRESS') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-lg-4">
                    <div class="social__body">
                        <div class="">
                            <div class="social__body--con"></div>
                            <div class="social__i">
                                <img class="" src="assets/img/phone-icon.svg" alt="image">
                            </div>
                            <div class="">
                                <h4 class="social__text">Our Contact</h4>
                                <p class="social__number"> {{ env('APP_PHONE') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-lg-4">
                    <div class="social__body">
                        <div class="">
                            <div class="social__body--mail"></div>
                            <div class="social__i">
                                <img class="" src="assets/img/mail-icon.svg" alt="image">
                            </div>
                            <div class="">
                                <h4 class="social__text">Send Mail</h4>
                                <p class="social__number"> {{ env('APP_MAIL') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="contact global__py pt-0">
        <div class="container p-sm-0">
            <div class="row">
                <form action="#" method="POST" class="contact__form">
                    <div class="col-12 col-md-9 col-lg-6 text-center m-auto aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                        <h3 class="global__text">contact us</h3>
                        <h2 class="global__heading">Get in Touch With Us
                        </h2>
                    </div>
                    <div class="contact__form-body">
                        <div class="">
                            <input id="nameInp" class="contact__form-inp form-control" type="text" placeholder="Enter Your Name">
                            <div class="">
                                <span class="sign__text sign__text-name text-danger d-none">Use a valid
                                    name</span>
                                <span class="sign__text sign__text-name--required text-danger d-none">Name
                                    is
                                    required</span>
                            </div>
                        </div>
                        <div class="">
                            <input id="emailInp" class="contact__form-inp form-control" type="email" placeholder="Enter Your Email">
                            <div class="">
                                <span class="sign__text sign__text-email text-danger d-none">Email must
                                    be
                                    valid</span>
                                <span class="sign__text sign__text-email--required text-danger d-none">Email
                                    is
                                    required</span>
                            </div>
                        </div>
                        <div class="">
                            <input id="phnInp" class="contact__form-inp form-control" type="tel" placeholder="Enter Phone Number">
                            <div class="">
                                <span class="sign__text sign__text-phn--required text-danger d-none">Phone number
                                    is
                                    required</span>
                                <span class="sign__text sign__text-phn text-danger d-none">Number must be valid</span>
                            </div>
                        </div>
                        <div class="">
                            <select class="contact__form-inp form-select">
                                <option value="1">Choose Subject</option>
                                <option value="2">Choose two</option>
                                <option value="3">Choose three</option>
                                <option value="4">Choose four</option>
                            </select>
                        </div>
                        <div class="contact__form-body--comnt">
                            <textarea class="contact__form-inp form-control" id="comment" cols="30" rows="5" placeholder="Write Your Message"></textarea>
                            <span class="sign__text sign__text-msg--required text-danger d-none">Message
                                is
                                required</span>
                        </div>
                        <div class="">
                            <input class="donation__btn global__btn mt-0" type="submit" value="send message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
