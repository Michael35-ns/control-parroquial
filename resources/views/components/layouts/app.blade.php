<!-- resources/views/components/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    @include('partials.head')
    @livewireStyles

    {{ $head ?? '' }}
</head>

<body class="min-h-screen bg-white dark:bg-zinc-900 antialiased">

    <!-- Sidebar -->
    @livewire('menu.sidebar')

    <!-- Main Content Wrapper -->
    <div class="main-content lg:pl-64 transition-all duration-300">

        <!-- Top Navigation (opcional) -->
        @if(isset($header))
        <header class="sticky top-0 z-40 bg-white dark:bg-zinc-800 border-b border-zinc-200 dark:border-zinc-700">
            <div class="px-4 sm:px-6 lg:px-8 py-4">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>

        <!-- Footer (opcional) -->
        @if(isset($footer))
        <footer class="border-t border-zinc-200 dark:border-zinc-700 py-6 px-4 sm:px-6 lg:px-8">
            {{ $footer }}
        </footer>
        @endif
    </div>

    @livewireScripts
    @fluxScripts

    {{ $scripts ?? '' }}
</body>

</html>