<x-app-layout>
    <article class="prose prose-lg">
        <h1>{{ $post->title }}</h1>
        <div class="text-xl">
            {{ $post->contents }}
        </div>
        <div class="mt-10 text-slate-400">
            {{ $post->author }} / {{ $post->date->toDateString() }}
        </div>
    </article>
</x-app-layout>
