{{-- Used on the index page (so shows a small summary --}}
{{-- See the guide on binshops.com for how to copy these files to your /resources/views/ directory --}}
{{-- 
<div class="col-md-6">
    <div class="blog-item">

        <div class='text-center blog-image'>
        </div>
        <div class="blog-inner-item">
            <h3 class=''><a href='{{ $post->url($locale, $routeWithoutLocale) }}'>{{ $post->title }}</a></h3>
            <h5 class=''>{{ $post->subtitle }}</h5>

            @if (config('binshopsblog.show_full_text_at_list'))
                <p>{!! $post->post_body_output() !!}</p>
            @else
                <p>{!! mb_strimwidth($post->post_body_output(), 0, 400, '...') !!}</p>
            @endif

            <div class="post-details-bottom">
                <span class="light-text">Authored by: </span> {{ $post->post->author->name }} <span
                    class="light-text">Posted at: </span> {{ date('d M Y ', strtotime($post->post->posted_at)) }}
            </div>
            <div class='text-center'>
                <a href="{{ $post->url($locale, $routeWithoutLocale) }}" class="btn btn-primary">View Post</a>
            </div>
        </div>
    </div>

</div> --}}






<div class="card blog__card text-start m-0 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
    <a href='{{ $post->url($locale, $routeWithoutLocale) }}'>
        <img class="img-fluid w-100" src="{{ asset('blog_images/'.$post->image_medium) }}" alt="image">
 
    </a>
    <div class="card-body px-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="">
                <span class="blog__card-span">{{ $post->meta_desc }}</span>
            </div>
            <hr class="blog__card-line">
            <div class="">
                <span class="blog__card-span"> {{ date('d M Y ', strtotime($post->post->posted_at)) }}</span>
            </div>
        </div>
        <div class="">
            <a href='{{ $post->url($locale, $routeWithoutLocale) }}' class="blog__title"> {{ $post->title }} </a>
            <p class="global__desc blog__desc">{{ $post->subtitle }}</p>
        </div>
    </div>
</div>
