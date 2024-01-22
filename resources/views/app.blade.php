<!DOCTYPE html>
<html lang="en" data-theme="dark" class="scroll-smooth" style="will-change: scroll-position;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @livewireStyles

    <title>Cuplislite - Better to talk</title>
</head>

<body class="font-sans bg-neutral-900 lg:px-28 flex flex-col md:flex-row h-screen scroll-smooth">

    @mobile
        @include('navbar')
    @endmobile


    @notmobile
        <div class="hidden md:flex">
            @include('sidebar')
        </div>
    @endnotmobile

    <main class="p-4 overflow-y-auto no-scrollbar flex flex-col">
        @yield('contents')
    </main>

    <div class="hidden lg:block">
        @include('recommendedUser')
    </div>



    @livewireScripts
    @stack('scripts')





</body>

</html>
