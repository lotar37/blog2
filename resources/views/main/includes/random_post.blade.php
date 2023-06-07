@foreach($randomPosts as $post)
    <div class="row " >
        <div class="m-3" data-aos="fade-up">
            <div class="blog-post-thumbnail-wrapper">
                <img src="{{ asset("storage/" . $post->preview_image) }}" alt="blog post" style="width:100%">
            </div>
            <div class="blog-post-category" style="display:flex;justify-content: space-between">
                <div>Новость</div>
                <div><i class="fa-regular far fa-eye"></i> {{ $post->count_views }}</div>
            </div>
            <a href="{{ route("main.post_show", $post->id) }}" class="">
                <h6 class="blog-post-title text-dark">{{ $post->title }}</h6>
            </a>
        </div>
    </div>
@endforeach
