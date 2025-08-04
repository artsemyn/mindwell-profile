<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel - {{ config('app.name', 'MindWell') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&family=League+Spartan:wght@700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-questrial text-gray-800 antialiased bg-gray-100">
    <div x-data="{ sidebarOpen: true }" class="flex min-h-screen">
        <!-- Sidebar -->
        <aside 
            class="fixed inset-y-0 left-0 bg-white w-64 flex flex-col z-30 transition-transform duration-300 ease-in-out"
            :class="{ '-translate-x-full': !sidebarOpen }"
            @click.away="sidebarOpen = false"
        >
            <!-- Logo -->
            <div class="h-20 flex items-center justify-center border-b flex-shrink-0">
                <a href="{{ route('admin.dashboard') }}" class="font-spartan text-3xl font-black">
                    <span class="text-mindwell-blue">MIND</span><span class="text-mindwell-orange">WELL</span>
                </a>
            </div>
            <!-- Navigasi Admin -->
            <x-admin-nav />
        </aside>

        <!-- Konten Utama -->
        <div class="flex-1 flex flex-col transition-all duration-300 ease-in-out" :class="{ 'lg:ml-64': sidebarOpen }">
            <!-- Header -->
            <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-20">
                <div class="flex items-center justify-between h-20 px-4 sm:px-6 lg:px-8">
                    <!-- Tombol Buka/Tutup Sidebar -->
                    <button @click.stop="sidebarOpen = !sidebarOpen" class="text-gray-500 focus:outline-none">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    
                    <!-- Tombol Aksi di Kanan -->
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('admin.articles.create') }}" class="hidden sm:inline-flex items-center bg-mindwell-orange text-white font-bold py-2 px-4 rounded-lg hover:bg-opacity-90 transition text-sm">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            Tambah Artikel
                        </a>
                        <a href="{{ route('home') }}" target="_blank" class="hidden sm:inline-flex items-center text-gray-600 hover:text-mindwell-blue transition text-sm font-medium">
                            Lihat Website
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>

                        <!-- Dropdown User -->
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-600 bg-gray-100 hover:text-gray-800 focus:outline-none transition">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1"><svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg></div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <!-- Logout -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </header>

            <!-- Konten Halaman -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                <div class="max-w-7xl mx-auto">
                    <!-- Judul Halaman -->
                    <header class="mb-6">
                        <h1 class="text-3xl font-spartan font-bold text-gray-900">
                            {{ $header ?? 'Dashboard' }}
                        </h1>
                    </header>

                    <!-- Session Messages -->
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert"><p>{{ session('success') }}</p></div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md" role="alert"><p>{{ session('error') }}</p></div>
                    @endif

                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>
</html>
