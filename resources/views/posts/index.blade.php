 <x-app-layout>
     <div class="space-y-16">
         @if ($posts->count())
             @foreach ($posts as $post)
                 <article class="prose">
                     <h1>
                         <a href=""
                             class="hover:text-blue-500 
                      transition-colors duration-100 font-bold">
                             {{ $post->title }}
                         </a>
                     </h1>
                     <div class="text-xl">
                         {{ $post->teaser }}
                     </div>
                     <div class="mt-10 text-slate-400">
                        {{ $post->author }} / {{ $post->date->toDateString() }} 
                     </div>
                 </article>
             @endforeach
         @else
             <p>Nothing here yet.</p>
         @endif
     </div>
 </x-app-layout>
