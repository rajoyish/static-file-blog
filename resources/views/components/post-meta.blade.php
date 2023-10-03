<div class="mt-10 text-slate-400">
    {{ $post->author }} / {{ $post->date->toDateString() }}
</div>
@if (count($post->tags))
    <div class="mt-2">
       @foreach ($post->tags as $tag) 
         <a href="{{ route('tags.show', $tag) }}"
             class="no-underline leading-s m inline-flex items-center rounded-full bg-blue-200 px-3 py-1 text-xs text-blue-700">
             {{ Str::upper($tag) }}  
         </a>
       @endforeach 
    </div>
@endif
