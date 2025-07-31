<nav x-data="{ open: false }" class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="font-spartan text-3xl font-black text-mindwell-blue">
                    MINDWELL
                </a>
            </div>

            <!-- Navigasi Desktop -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Tentang Kami</a>
                <a href="{{ route('produk') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Produk</a>
                <a href="{{ route('app.features') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Aplikasi</a>
                <a href="{{ route('service') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Layanan</a>
                <a href="{{ route('forum.index') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Forum</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Kontak</a>
            </div>

            <!-- Tombol Login/Register atau Dashboard -->
            <div class="hidden md:flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-mindwell-blue">Login</a>
                    <a href="{{ route('register') }}" class="bg-mindwell-orange text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-opacity-90 transition">Register</a>
                @else
                     <a href="{{ auth()->user()->is_admin ? route('admin.dashboard') : route('dashboard') }}" class="bg-mindwell-blue text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-opacity-90 transition">
                        Dashboard
                    </a>
                @endguest
            </div>

            <!-- Tombol Hamburger (Mobile) -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-mindwell-orange">
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg :class="{'block': open, 'hidden': !open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div :class="{'block': open, 'hidden': !open}" class="md:hidden">
        <div class="pt-2 pb-3 space-y-1 px-2">
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-mindwell-orange hover:bg-gray-50">Tentang Kami</a>
            <a href="{{ route('produk') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-mindwell-orange hover:bg-gray-50">Produk</a>
            <a href="{{ route('app.features') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-mindwell-orange hover:bg-gray-50">Aplikasi</a>
            <a href="{{ route('service') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-mindwell-orange hover:bg-gray-50">Layanan</a>
            <a href="{{ route('forum.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-mindwell-orange hover:bg-gray-50">Forum</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-mindwell-orange hover:bg-gray-50">Kontak</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200 px-2">
             @guest
                <a href="{{ route('login') }}" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Login</a>
                <a href="{{ route('register') }}" class="mt-1 block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Register</a>
            @else
                <a href="{{ auth()->user()->is_admin ? route('admin.dashboard') : route('dashboard') }}" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Dashboard</a>
                 <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="mt-1 block w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</nav>