@extends('layout.app', ['title' => $title])

@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section('page_content')

    <div class="banner">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">blog</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="/">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                blog
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class='col-sm-12 binshopsblog_container'>
        <div class="row">
            <div class="col-md-10 offset-lg-1 ">

                @if ($category_chain)
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                @forelse($category_chain as $cat)
                                    / <a href="{{ $cat->categoryTranslations[0]->url($locale) }}">
                                        <span class="cat1">{{ $cat->categoryTranslations[0]['category_name'] }}</span>
                                    </a>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                @endif

                {{-- @if (isset($binshopsblog_category) && $binshopsblog_category)
                    <h2 class='text-center'> {{ $binshopsblog_category->category_name }}</h2>

                    @if ($binshopsblog_category->category_description)
                        <p class='text-center'>{{ $binshopsblog_category->category_description }}</p>
                    @endif
                @endif --}}

                <div class="container">
                    <div class="row">
                        @forelse($posts as $post)
                            <div class="col-md-6">
                                @include('binshopsblog::partials.index_loop')
                            </div>
                        @empty
                            <div class="col-md-12">
                                <div class='alert alert-danger'>No posts!</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
    </div>
@endsection
