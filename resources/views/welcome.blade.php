<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mattmen, Inc.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />


        <!-- Tailwind CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Tailwind CDN -->
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: black;
            }
        </style>

        <!-- Font Awesome Script -->
        <script src="https://kit.fontawesome.com/bf5de05bdc.js" crossorigin="anonymous"></script>

        <!-- Livewire Script -->
        @livewireStyles

        <!-- Inter font family -->
        <!-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> -->

        <!-- Alphine JS. -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    </head>
    <body class="subpixel-antialiased">

        @livewire('hero-section')
        @livewire('about-section')
        @livewire('project-section')
        @livewire('david-lopez-section')
        @livewire('contact-section')

    @livewireScripts
    </body>
</html>
