<nav class="navbar navbar-expand-lg navbar-light bg-white menu menu__scroll">
    <div class="container p-sm-0">
      

        <a class="navbar-brand menu__logo text-center p-0 m-0 px-2 py-1" href="/"><img class="m rounded "
                src="{{ asset('assets/img/main.png') }} " style="height: 55px; object-fit: cover;" alt="logo"></a>


        <button class="navbar-toggler menu__toggle" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto menu__list my-3 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold menu__list-link" href="/about">about us</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link fw-bold menu__list-link" href="#">Our Work </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold menu__list-link" href="#">Our Healthcare Providers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold menu__list-link" href="#">News & Event</a>
                </li>




                <li class="nav-item">
                    <a class="nav-link fw-bold menu__list-link" href="#">Join Us</a>
                </li>


         
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold menu__list-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Join Us
                    </a>
                    <ul class="dropdown-menu menu__list-dropdown--ul" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Carrers</a></li>
                        <li><a class="dropdown-item" href="#">Our Work</a></li>
                        <li><a class="dropdown-item" href="/contact">Contact</a></li>
                    </ul>
                </li> --}}


            </ul>

            <div class="d-sm-flex d-lg-block gap-4 mt-3 mt-lg-0">
                <a href="/donate" class="btn  mb-3 mb-lg-0   px-2 py-2"  style="background-color: #20c997 !important; color: white">
                    <span class="rounded fw-bold px-3 py-1" style="border: 1px solid white;" >
                        Donate
                    </span>
                </a>
            </div>



        </div>
    </div>
</nav>
