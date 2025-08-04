<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MindWell') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700;900&family=Questrial&display=swap" rel="stylesheet">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        html, body {
            height: 100%;
        }
        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1 0 auto;
            width: 100%;
        }
        .footer {
            flex-shrink: 0;
            width: 100%;
        }
    </style>
</head>
<body class="font-questrial text-gray-800 antialiased bg-white">
    <div id="app">
        <!-- ================================================== -->
        <!-- Menggunakan Navbar Publik, bukan Navigasi Dashboard -->
        <!-- ================================================== -->
        <x-navbar />

        <!-- Page Content -->
        <main class="content">
            {{ $slot }}
        </main>

        <!-- ================================================== -->
        <!-- Menggunakan Footer Publik -->
        <!-- ================================================== -->
        <div class="footer">
            <x-footer />
        </div>
    </div>
    
    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
            });
            
            // Ensure the body has proper height
            document.body.style.minHeight = '100vh';
        });
    </script>
</body>
</html>
