@foreach($randomPosts as $post)
    <div class="row blog-post-row">
        <div class="col-md-12 blog-post" data-aos="fade-up">
            <div class="blog-post-thumbnail-wrapper">
                <img src="{{ asset("storage/" . $post->preview_image) }}" alt="blog post">
            </div>
            <p class="blog-post-category">Новость</p>
            <a href="{{ route("main.post_show", $post->id) }}" class="blog-post-permalink">
                <h6 class="blog-post-title">{{ $post->title }}</h6>
            </a>
        </div>
    </div>
@endforeach
