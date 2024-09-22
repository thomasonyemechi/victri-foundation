@extends('layout.app')

@section('page_title')
@endsection

@section('page_content')
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

                    @for ($i = 1; $i <= 13; $i++)
                        <a class="gallery__body-layer" data-gall="gallery01" href="assets/img/gallery/{{ $i }}.jpg">
                            <img class="img-fluid" src="assets/img/gallery/{{ $i }}.jpg" alt="image">
                        </a>
                    @endfor


                </div>

            </div>



        </div>
    </div>
@endsection
