<footer class="bg-mindwell-blue text-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Kolom Logo & Deskripsi -->
            <div class="col-span-2 md:col-span-1">
                <h3 class="font-spartan text-2xl font-black">MINDWELL</h3>
                <p class="mt-2 text-sm text-gray-300">Inovasi psikoteknologi untuk kesehatan mental yang lebih baik.</p>
            </div>

            <!-- Kolom Navigasi -->
            <div>
                <h4 class="font-bold uppercase tracking-wider">Navigasi</h4>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-mindwell-yellow">Tentang Kami</a></li>
                    <li><a href="{{ route('produk') }}" class="hover:text-mindwell-yellow">Produk</a></li>
                    <li><a href="{{ route('service') }}" class="hover:text-mindwell-yellow">Layanan</a></li>
                    <li><a href="{{ route('forum.index') }}" class="hover:text-mindwell-yellow">Forum</a></li>
                </ul>
            </div>

            <!-- Kolom Kontak -->
            <div>
                <h4 class="font-bold uppercase tracking-wider">Kontak</h4>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="mailto:info@mindwell.com" class="hover:text-mindwell-yellow">info@mindwell.com</a></li>
                    <li><a href="tel:+62123456789" class="hover:text-mindwell-yellow">+62 123 456 789</a></li>
                    <li class="text-gray-300">Surakarta, Indonesia</li>
                </ul>
            </div>

            <!-- Kolom Social Media -->
            <div>
                <h4 class="font-bold uppercase tracking-wider">Ikuti Kami</h4>
                <div class="flex mt-4 space-x-4">
                    <!-- Ganti dengan ikon SVG Anda -->
                    <a href="#" class="text-gray-300 hover:text-mindwell-yellow">FB</a>
                    <a href="#" class="text-gray-300 hover:text-mindwell-yellow">IG</a>
                    <a href="#" class="text-gray-300 hover:text-mindwell-yellow">LI</a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8 text-center text-sm text-gray-400">
            &copy; {{ date('Y') }} MindWell Technologies. All rights reserved.
        </div>
    </div>
</footer>
