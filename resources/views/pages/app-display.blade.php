<x-app-layout>
    <!--
        Catatan Desain:
        - Menggunakan background putih dan abu-abu muda (bg-gray-50) untuk nuansa cerah.
        - Teks utama menggunakan warna brand (mindwell-blue) dan abu-abu tua untuk kontras yang baik.
        - Elemen gradien dan blur tetap dipertahankan dengan opasitas rendah agar terlihat subtil.
    -->
    <div class="bg-white text-gray-800 overflow-hidden">
        
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center text-center py-20 px-4 bg-gray-50">
            <!-- Latar Belakang Gradien Blur -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="w-[80vw] h-[80vw] max-w-4xl max-h-4xl bg-gradient-to-tr from-mindwell-blue to-mindwell-orange rounded-full blur-3xl opacity-10"></div>
            </div>

            <div class="relative z-10" data-aos="fade-up">
                <h1 class="font-spartan text-5xl md:text-8xl font-black tracking-tighter text-mindwell-blue">
                    Ketenangan. <br> Di Saku Anda.
                </h1>
                <p class="mt-6 text-lg md:text-xl max-w-2xl mx-auto text-gray-600">
                    Aplikasi MindWell adalah partner harian Anda dalam memahami emosi, mengelola stres, dan membangun ketahanan mental dengan bantuan AI dan data biofeedback.
                </p>
                <div class="mt-10">
                    <a href="#fitur" class="bg-mindwell-blue text-white font-bold py-4 px-10 rounded-full text-lg hover:bg-opacity-90 transition duration-300">
                        Jelajahi Fitur
                    </a>
                </div>
            </div>
        </section>

        <!-- Showcase Mockup Aplikasi -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="relative max-w-5xl mx-auto">
                    <!-- Ganti dengan gambar mockup aplikasi Anda -->
                    <img src="https://placehold.co/1200x800/e2e8f0/334155?text=MindWell+App+UI" 
                         alt="[Gambar antarmuka Aplikasi MindWell]"
                         class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </section>

        <!-- Bagian Fitur Detail -->
        <section id="fitur" class="py-20 md:py-32">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-spartan text-4xl md:text-5xl font-bold text-mindwell-blue">Dirancang untuk Anda</h2>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Setiap alat di dalam aplikasi MindWell diciptakan untuk memberikan wawasan yang actionable dan mudah dipahami.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Fitur 1: Dashboard Personal -->
                    <div class="bg-white border border-gray-200/80 p-8 rounded-2xl shadow-sm" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-mindwell-orange/10 mb-6">
                            <svg class="w-8 h-8 text-mindwell-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Dashboard Personal</h3>
                        <p class="mt-2 text-gray-500">
                            Lihat ringkasan kondisi mental Anda hari ini, termasuk tingkat stres, fokus, dan progres dari tujuan Anda.
                        </p>
                    </div>
                    <!-- Fitur 2: Analisis AI -->
                    <div class="bg-white border border-gray-200/80 p-8 rounded-2xl shadow-sm" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-mindwell-blue/10 mb-6">
                            <svg class="w-8 h-8 text-mindwell-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.373 3.373 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Analisis Performa AI</h3>
                        <p class="mt-2 text-gray-500">
                            AI kami menganalisis data biofeedback dan jurnal Anda untuk memberikan laporan mendalam tentang pemicu stres dan pola emosi Anda.
                        </p>
                    </div>
                    <!-- Fitur 3: Latihan Terpandu -->
                    <div class="bg-white border border-gray-200/80 p-8 rounded-2xl shadow-sm" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-mindwell-yellow/20 mb-6">
                            <svg class="w-8 h-8 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Sesi Terpandu</h3>
                        <p class="mt-2 text-gray-500">
                            Akses puluhan sesi meditasi, latihan pernapasan, dan audio relaksasi yang dirancang oleh psikolog profesional.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action (CTA) -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4 text-center" data-aos="fade-up">
                <h2 class="font-spartan text-4xl md:text-5xl font-bold text-mindwell-blue">Ambil Langkah Pertama Hari Ini</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Unduh aplikasi MindWell di App Store dan Google Play. Mulai perjalanan Anda menuju pikiran yang lebih sehat dan seimbang.
                </p>
                <div class="mt-10 flex justify-center items-center space-x-4">
                    <a href="#" class="bg-gray-800 text-white py-3 px-8 rounded-lg font-semibold hover:bg-gray-900 transition">App Store</a>
                    <a href="#" class="bg-gray-800 text-white py-3 px-8 rounded-lg font-semibold hover:bg-gray-900 transition">Google Play</a>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>