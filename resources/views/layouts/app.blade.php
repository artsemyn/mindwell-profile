<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MindWell') }}</title>

    <!-- Fonts & Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700;900&family=Questrial&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-questrial text-gray-800 antialiased overflow-x-hidden">
    <div class="min-h-screen bg-white flex flex-col">
        <x-navbar />
        <main class="flex-grow">
            {{ $slot }}
        </main>
        <x-footer />
    </div>
    
    <!-- ================================================== -->
    <!-- AWAL PERUBAHAN: Tambahkan GSAP Core & ScrollTrigger -->
    <!-- ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <!-- ================================================== -->
    <!-- AKHIR PERUBAHAN -->
    <!-- ================================================== -->
</body>
</html>
