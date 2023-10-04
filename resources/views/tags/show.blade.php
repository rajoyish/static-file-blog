<x-app-layout>
    <h1 class="text-2xl font-bold text-slate-400">Tag: {{ Str::upper($tag) }}</h1>
    <div class="mt-8 space-y-16">
        @foreach ($posts as $post)
            <x-post-list-item :post="$post" />
        @endforeach
        {{ $posts->links() }}
    </div>
</x-app-layout>
