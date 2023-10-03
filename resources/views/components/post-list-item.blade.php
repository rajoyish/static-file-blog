<article class="prose">
    <h1>
        <a href="{{ route('posts.show', $post->slug) }}"
            class="hover:text-blue-500 
     transition-colors duration-100 font-bold">
            {{ $post->title }}
        </a>
    </h1>
    <div class="text-xl">
        {{ $post->teaser }}
    </div>
    <x-post-meta :post="$post" />
</article>