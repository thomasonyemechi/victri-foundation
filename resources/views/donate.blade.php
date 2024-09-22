@extends('layout.app')

@section('page_title')
@endsection

@section('page_content')
    <header class="hero__three">
        <div class="hero__three-layer">
            <div class="container p-sm-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="d-flex align-items-center">
                            <img class="hero__two-i" src="assets/img/8start.svg" alt="icon">
                            <h4 class="global__rise hero__three-gray">
                                Your Help Can Prevent Blindness
                            </h4>
                        </div>
                        <h1 class="global__title">
                            A Brighter Future Starts with Clear Vision
                        </h1>
                        <p class="global__desc hero__three-gray">
                            Donate today and help us restore sight, bringing hope and opportunity to children and adults
                            around the world
                        </p>
                        <a href="/donate" class="global__btn hero__three-btn">Donate Now
                            <i class="fa-solid fa-arrow-up-long global__btn-arrow"></i>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-end mt-5 mt-sm-3">
                        <div class="">
                            <div class="hero__three-box">
                                <div class="hero__three-box--icon">
                                    <img class="img-fluid" src="assets/img/donation-2.svg" alt="image">
                                </div>
             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




    <div class="donate global__py pt-50">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="col-md-10">
                        <h2 class="global__heading">Donate Now</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Form -->
                    <div class="">
                        <form action="#" method="POST" class="form mt-0 border-0">
                            <div class="d-flex align-items-center">
                                <img class="form__icon" src="assets/img/dollar-lg-S.svg" alt="icon">
                                <p class="form__price">$100</p>
                            </div>
                            <hr class="form__border">
                            <div class="form__mb">
                                <ul class="form__ul">
                                    <li>
                                        <label class="form__ul-label form__ul-label--pointer">
                                            <span class="form__ul-div d-block">
                                                $25
                                                <input type="radio" name="radio">
                                                <span
                                                    class="form__ul-label--checkmark form__ul-label--checkmark---left"></span>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="form__ul-label form__ul-label--pointer">
                                            <span class="form__ul-div d-block">
                                                $50
                                                <input type="radio" name="radio">
                                                <span
                                                    class="form__ul-label--checkmark form__ul-label--checkmark---left"></span>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="form__ul-label form__ul-label--pointer">
                                            <span class="form__ul-div d-block">
                                                $100
                                                <input type="radio" name="radio">
                                                <span
                                                    class="form__ul-label--checkmark form__ul-label--checkmark---left"></span>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="form__ul-label form__ul-label--pointer">
                                            <span class="form__ul-div d-block">
                                                $250
                                                <input type="radio" name="radio">
                                                <span
                                                    class="form__ul-label--checkmark form__ul-label--checkmark---left"></span>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <div data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                            aria-controls="collapseExample">
                                            <label class="form__ul-label form__ul-label--pointer">
                                                <span class="form__ul-div d-block">
                                                    Custom Amount
                                                    <input type="radio" name="radio">
                                                    <span class="form__ul-label--checkmark"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="collapse col-5 col-sm-3 col-lg-2 mt-3" id="collapseExample">
                                    <input class="form-control form__input" type="number" placeholder="$50">
                                </div>
                            </div>
                            <div class="form__mb">
                                <ul class="form__ul">
                                    <li class="bg-transparent py-0 ps-0">
                                        <label class="form__ul-label form__ul-label--pointer">
                                            <span class="form__ul-div d-block px-0">
                                                <input type="radio" id="testFive" name="check">
                                                <span class="form__ul-label--checkmark" style="left: 0;"></span>
                                                Test Donation
                                            </span>
                                        </label>
                                    </li>
                                    <li class="bg-transparent py-0 ps-0">
                                        <label class="form__ul-label form__ul-label--pointer">
                                            <span class="form__ul-div d-block px-0">
                                                <input type="radio" id="testSix" name="check">
                                                <span class="form__ul-label--checkmark" style="left: 0;"></span>
                                                Offline Donation
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form__mb">
                                <h4 class="form__heading form__mb">Personal Information</h4>
                                <div class="d-sm-flex col-12">
                                    <div class="col-sm-6 pe-sm-3">
                                        <label class="form__ul-label form__ul-label--lg" for="first">first name
                                            <span class="text-danger ps-1">*</span>
                                            <span class="ps-2"><img src="assets/img/question.svg"
                                                    alt="image"></span>
                                        </label>
                                        <input class="form-control form__input" id="first" type="text"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6 ps-sm-3 mt-4 mt-sm-0">
                                        <label class="form__ul-label form__ul-label--lg" for="last">last name<span
                                                class="text-danger ps-1">*</span><span class="ps-2"><img
                                                    src="assets/img/question.svg" alt="image"></span></label>
                                        <input class="form-control form__input" id="last" type="text"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="">
                                        <label class="form__ul-label form__ul-label--lg" for="email">Email Address
                                            <span class="text-danger ps-1">*</span><span class="ps-2"><img
                                                    src="assets/img/question.svg" alt="image"></span></label>
                                        <input class="form-control form__input" id="email" type="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="mt-4">
                                        <label class="form__ul-label form__ul-label--lg ps-0" for="comment">Comment
                                            <span class="ps-2"><img src="assets/img/question.svg"
                                                    alt="image"></span></label>
                                        <textarea class="form-control form__input" id="comment" cols="30" rows="5"
                                            placeholder="Leave a Comment"></textarea>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center">
                                        <label class="form__ul-label form__ul-label--pointer ps-0">
                                            <span class="form__ul-div d-block">
                                                <input type="checkbox" id="testSaven" name="check">
                                                <span class="form__ul-label--checkmark form__ul-label--checkmark2"></span>
                                                <span class="ps-2">Make
                                                    this an
                                                    anonymous
                                                    donation.</span>
                                                <span class="ps-2">
                                                    <img src="assets/img/question.svg" alt="image">
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="">
                                        <button class="btn donation__btn global__btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" type="button">donation now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Right Sider_Bar   -->
                <div class="col-12 col-sm-8 col-lg-4 mt-5 mt-lg-0">
                    <div class="card cases__card m-0">
                        <div class="cases__card-img">
                            <a href="single-cases.html">
                                <img class="img-fluid w-100" src="assets/img/img-2.png" alt="image">
                            </a>
                            <h4 class="cases__card-tag">health</h4>
                        </div>
                        <div class="card-body px-4">
                            <div class="d-flex">
                                <img class="cases__card-i" src="assets/img/location.svg" alt="icon">
                                <span class="cases__card-location ps-1">
                                    South Africa
                                </span>
                            </div>
                            <div class="">
                                <a href="single-cases.html" class="cases__card-title">Charity is a simple method to
                                    prove
                                    kindness
                                    of
                                    nation</a>
                            </div>
                            <div class="cases__card-range">
                                <p class="global__desc m-0">Founded: 91.50%</p>
                                <div class="progress cases__card-progress">
                                    <div class="progress-bar cases__card-progress--bar" role="progressbar"
                                        style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="cases__card-range--bottom">
                                    <div class="d-flex align-items-center cases__card-range--bottom---m gap-2">
                                        <img class="cases__card-range--dollar" src="assets/img/box.svg" alt="icon">
                                        <span class="cases__card-range--price">
                                            Rasied: $34,000
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="cases__card-range--dollar" src="assets/img/dollar-s.svg"
                                            alt="icon">
                                        <span class="cases__card-range--price">goal: $40,500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
@endsection
