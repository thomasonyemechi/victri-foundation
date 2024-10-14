<div class="join">
    <div class="container p-sm-0">
        <div class="row">
            <div class="card join__card">
                <img src="{{ asset('assets/img/BG-Element.png') }}" class="img-fluid join__card-img" alt="image">
                <div class="card-img-overlay join__card-layer">
                    <div class="col-11 col-md-7">
                        <h3 class="join__text global__text">Looking for an outreach</h3>
                        <h2 class="join__heading global__heading">
                            Contact us today to request a medical outreach for you community 
                        </h2>
                        <button class="join__card-layer--btn global__btn">Request Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="footer">
    <div class="container p-sm-0">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <a href="/">
                    <img class="img-fluid rounded" src="{{ asset('assets/img/logo-footer.png') }}" alt="logo">

                </a>
                <p class="global__desc footer__desc">
                    Join us in the fight against childhood blindness, ensuring every child can see their bright future.
                </p>
                <div class="footer__social">
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
            <div class="col-12 col-md-6 col-lg-4 col-xl-2 d-md-flex justify-content-center my-5 my-md-0">
                <div class="">
                    <h4 class="footer__sub">Our initiatives</h4>
                    <ul class="footer__list">
                        <li>
                            <a class="footer__list-item" href="#">
                                Better Birth
                            </a>
                        </li>
                        <li>
                            <a class="footer__list-item" href="#">
                                Better Vision
                            </a>
                        </li>
                        <li>
                            <a class="footer__list-item" href="#">
                                Better Health
                            </a>
                        </li>
                        <li>
                            <a class="footer__list-item" href="#">
                                Privecy & Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-5 mb-md-0 mt-md-5 mt-lg-0">
                <div class="">
                    <h4 class="footer__sub">Donate</h4>
                    <ul class="footer__list">
                        <li>
                            <a class="footer__list-item" href="/donate">
                                Give Donation
                            </a>
                        </li>
                        <li>
                            <a class="footer__list-item" href="#">
                                Become Volunteer
                            </a>
                        </li>


                        <li>
                            <a class="footer__list-item" href="#">
                                Child Sponsorship
                            </a>
                        </li>


                        <li>
                            <a class="footer__list-item" href="#">
                                Other Ways to Give
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
         
        </div>
        <hr class="footer__border">
        <div class="row">
            <div class="col-12 text-center">
                <p class="footer__bottom">Copyright © {{ date('Y') }} {{ env('APP_NAME') }} </p>
            </div>
        </div>
    </div>
</div>
