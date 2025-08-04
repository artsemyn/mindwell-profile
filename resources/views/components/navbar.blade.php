<nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="font-spartan text-3xl font-black">
                    <span class="text-mindwell-blue">MIND</span><span class="text-mindwell-orange">WELL</span>
                </a>
            </div>

            <!-- Navigasi Desktop -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Tentang Kami</a>
                <a href="{{ route('produk') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Produk</a>
                <a href="{{ route('app.features') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Aplikasi</a>
                <a href="{{ route('service') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Layanan</a>
                <a href="{{ route('articles.index') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Artikel</a>
                <a href="{{ route('forum.index') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Forum</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-mindwell-orange transition-colors duration-300">Kontak</a>
            </div>

            <!-- Tombol Login/Register atau Dashboard (Desktop) -->
            <div class="hidden md:flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-mindwell-blue">Login</a>
                    <a href="{{ route('register') }}" class="bg-mindwell-orange text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-opacity-90 transition">Register</a>
                @else
                    @if (auth()->user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}" class="bg-mindwell-blue text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-opacity-90 transition">
                            Dashboard
                        </a>
                    @endif

                    <!-- Tombol Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-gray-600 hover:text-mindwell-blue">Logout</button>
                    </form>
                @endguest
            </div>

            <!-- Tombol Hamburger (Mobile) -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="z-50 relative w-8 h-8 flex items-center justify-center text-gray-600 focus:outline-none">
                    <span class="sr-only">Open main menu</span>
                    <div class="absolute w-6 h-0.5 bg-current transform transition-all duration-300 ease-in-out" :class="{ 'rotate-45': open, '-translate-y-2': !open }"></div>
                    <div class="absolute w-6 h-0.5 bg-current transform transition-all duration-300 ease-in-out" :class="{ 'opacity-0': open }"></div>
                    <div class="absolute w-6 h-0.5 bg-current transform transition-all duration-300 ease-in-out" :class="{ '-rotate-45': open, 'translate-y-2': !open }"></div>
                </button>
            </div>
        </div>
    </div>

    
</nav>
