<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

</head>

<body class="antialiased">
    <div class="max-w-2xl mx-auto py-16">
        <a href="{{ route('posts.index') }}"
            class="inline-block text-3xl font-extrabold hover:text-blue-500
        transition-colors duration-100">
            {{ config('app.name') }}
        </a>

        <main class="mt-16">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
