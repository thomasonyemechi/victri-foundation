@extends('layout.app', ['page_title' => $post->gen_seo_title()])

@section('blog-custom-css')
@endsection

@section('page_content')
    <div class="blog global__py pt-0">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid rounded" src=" {{ asset('blog_images/' . $post->image_large) }} "
                        style=" height: 80%; width: 100%; object-fit: cover;" alt="image">

                    <h3 class="global__heading blog__detail-m blog__detail-head--heading">{{ $post->title }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="col-12">
                        <div class="col-xl-8 m-auto position-relative">

                            <div class="d-flex mt-5">
                                <div class="d-none d-lg-block position-absolute blog__detail-social">
                                    <h4 class="blog__detail-social--text">share</h4>
                                    <ul class="">
                                        <li>
                                            <a href="javascript:;" onclick="shareOnFacebook()">
                                                <i class="fa-brands fa-facebook-f blog__detail-social--f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" onclick="shareOnTwitter()">
                                                <i class="fa-brands fa-twitter blog__detail-social--tw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" onclick="shareOnWhatsApp()">
                                                <i class="fa-brands fa-whatsapp blog__detail-social--in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" onclick="sahreOnLinkedIN()">
                                                <i class="fa-brands fa-linkedin-in blog__detail-social--in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    {!! $post->post_body !!}
                                </div>
                            </div>
                            <div class="">
                                <div class="blog__detail-social">
                                    <p class="blog__detail-social--para">Like this article? Spread the word</p>
                                    <ul class="d-flex gap-4 pb-4">
                                        <li class="m-0">
                                            <a href="javascript:;" onclick="shareOnFacebook()">
                                                <i class="fa-brands fa-facebook-f blog__detail-social--f"></i>
                                            </a>
                                        </li>
                                        <li class="m-0">
                                            <a href="javascript:;" onclick="shareOnTwitter()">
                                                <i class="fa-brands fa-twitter blog__detail-social--tw"></i>
                                            </a>
                                        </li>
                                        <li class="m-0">
                                            <a href="javascript:;" onclick="shareOnWhatsApp()">
                                                <i class="fa-brands fa-whatsapp blog__detail-social--in"></i>
                                            </a>
                                        </li>


                                        <li class="m-0">
                                            <a href="javascript:;" onclick="sahreOnLinkedIN()">
                                                <i class="fa-brands fa-linkedin-in blog__detail-social--in"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>



                        @if (config('binshopsblog.comments.type_of_comments_to_show', 'built_in') !== 'disabled')
                            <div class="" id='maincommentscontainer'>
                                <h2 class='text-left' id='binshopsblogcomments'>Comments</h2>
                                @include('binshopsblog::partials.show_comments')
                            </div>
                        @else
                            {{-- Comments are disabled --}}
                        @endif




                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const link = "https://victrifoundation.com/en/blog/{{ $post->slug }}";
        const text = "Check out this web share tutorial";

        function shareOnFacebook() {
            const facebookIntentURL = "https://www.facebook.com/sharer/sharer.php";
            const contentQuery = `?u=${encodeURIComponent(link)}&quote=${encodeURIComponent(text)}`;
            const shareURL = facebookIntentURL + contentQuery;
            window.open(shareURL, "_blank");
        }

        function shareOnTwitter() {
            const twitterIntentURL = "https://twitter.com/intent/tweet";
            const contentQuery = `?url=${encodeURIComponent(link)}&text=${encodeURIComponent(text)}`;
            const shareURL = twitterIntentURL + contentQuery;
            window.open(shareURL, "_blank");
        }


        function shareOnWhatsApp() {
            const url = "https://wa.me/?text=" + encodeURIComponent(text + "\n" + link);
            window.open(url, "_blank");
        }


        function sahreOnLinkedIN() {
            var url = "http://www.linkedin.com/shareArticle?mini=true&title=" + encodeURIComponent(text) + "&title=" + encodeURIComponent(text);

            window.open(url, "_blank");
        }
    </script>
@endsection

@section('blog-custom-js')
    <script src="{{ asset('binshops-blog.js') }}"></script>
@endsection
