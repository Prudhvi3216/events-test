<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="container mx-auto mt-10">
            <div class="grid grid-flow-col grid-cols-12 gap-8">
                <div class="col-span-2">
                    <ul class="bg-white">
                        <a href="{{ route('view-genres') }}">
                            <li class="p-3 border-b">Genres</li>
                        </a>
                        <a href="{{ route('view-artists') }}">
                            <li class="p-3 border-b">Artists</li>
                        </a>
                        <a href="{{ route('view-venues') }}">
                            <li class="p-3 border-b">Venues</li>
                        </a>
                        <a href="{{ route('view-events') }}">
                            <li class="p-3 border-b">Events</li>
                        </a>
                    </ul>
                </div>
                <div class="col-span-10 bg-white">
                    {{ $slot }}
                </div>
            </div>
        </main>

    </div>
    @livewireScripts
</body>

</html>