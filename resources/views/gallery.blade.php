@extends('layout.app')

@section('page_title')
@endsection

@section('page_content')
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            margin: 2vmin;
        }

        .img-list {
            height: 40vh;
            flex-grow: 1;
            margin: 2vmin;
        }

        .img-list:last-child {
            flex-grow: 10;
        }

        img {
            max-height: 100%;
            min-width: 100%;
            object-fit: cover;
            vertical-align: bottom;
            border-radius: 1vmin;
        }

        @media (max-aspect-ratio: 1/1) {
            .img-list {
                height: 30vh;
            }
        }

        @media (max-height: 480px) {
            .img-list {
                height: 80vh;
            }
        }

        @media (max-aspect-ratio: 1/1) and (max-width: 480px) {
            ul {
                flex-direction: row;
            }

            .img-list {
                height: auto;
                width: 100%;
            }

            img {
                width: 100%;
                max-height: 75vh;
                min-width: 0;
            }
        }
    </style>



    <div class="banner mb-0">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">Gallery</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="/">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                Gallery
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

    <div class="gallery global__py pt-50">
        <div class="container">
            <div class="row">
                <div class="gallery__body">




                    <ul style="list-style: none;">


                        @for ($i = 0; $i <= 22; $i++)
                      

                            <li class="img-list">
                                <a class="gallery__body-layer" data-gall="gallery01"
                                    href="assets/img/gallery/{{ $i }}.jpg">

                                    <img src="assets/img/gallery/{{ $i }}.jpg" alt="" loading="lazy">

                                </a>
                            </li>
                        @endfor



                        <li class="img-list"></li>
                    </ul>



                    {{-- <a class="gallery__body-layer" data-gall="gallery01" href="assets/img/gallery/1.jpg">
                        <img class="img-fluid" src="assets/img/gallery/1.jpg" alt="image">
                    </a>
                    @for ($i = 1; $i <= 13; $i++)
                        <a class="gallery__body-layer" data-gall="gallery01" href="assets/img/gallery/{{ $i }}.jpg">
                            <img class="img-fluid" src="assets/img/gallery/{{ $i }}.jpg" alt="image">
                        </a>
                    @endfor --}}


                </div>

            </div>



        </div>
    </div>
@endsection
