@foreach($randomImages as $post)
    <div class="row " >
        <div class="m-3" data-aos="fade-up">
            <div class="blog-post-thumbnail-wrapper">
                <img src="{{ asset("storage/" . $post->preview_image) }}" alt="blog post" style="width:100%;border-radius: 0.25rem">
            </div>
        </div>
    </div>
@endforeach
