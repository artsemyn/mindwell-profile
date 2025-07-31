<!-- File: resources/views/pages/app.blade.php -->
<x-app-layout>
    <div class="bg-white">
        <!-- Hero Section -->
        <section class="relative bg-mindwell-blue py-20 md:py-32 text-white overflow-hidden">
            <div class="container mx-auto px-6 text-center z-10 relative">
                <div data-aos="fade-up">
                    <h1 class="font-spartan text-5xl md:text-7xl font-black uppercase">Aplikasi MindWell</h1>
                    <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto text-gray-300">
                        Kesehatan mental Anda, kini ada di genggaman. Dapatkan wawasan mendalam dan bimbingan personal setiap hari.
                    </p>
                </div>
            </div>
            <!-- Elemen dekoratif -->
            <div class="absolute -bottom-1/4 -left-20 w-72 h-72 bg-white/10 rounded-full"></div>
            <div class="absolute -top-1/4 -right-20 w-96 h-96 bg-white/10 rounded-full"></div>
        </section>

        <!-- Bagian Fitur Utama -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="font-spartan text-4xl font-bold text-mindwell-blue">Fitur Unggulan Kami</h2>
                    <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
                        Setiap fitur dirancang oleh para ahli untuk memberikan dampak nyata bagi kesejahteraan Anda.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Fitur 1: Pelacakan Biofeedback -->
                    <div class="text-center p-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center justify-center h-20 w-20 rounded-full bg-mindwell-orange/10 mx-auto mb-4">
                            <!-- Ganti dengan ikon SVG -->
                            <svg class="w-10 h-10 text-mindwell-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 6V3m0 18v-3"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Pelacakan Biofeedback Real-Time</h3>
                        <p class="mt-2 text-gray-500">
                            Lihat aktivitas gelombang otak dan detak jantung Anda secara langsung dari perangkat MindWell Aura™ untuk memahami respons tubuh terhadap stres.
                        </p>
                    </div>
                    <!-- Fitur 2: Analisis Stres AI -->
                    <div class="text-center p-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center justify-center h-20 w-20 rounded-full bg-mindwell-blue/10 mx-auto mb-4">
                             <!-- Ganti dengan ikon SVG -->
                            <svg class="w-10 h-10 text-mindwell-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.373 3.373 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Analisis Stres Berbasis AI</h3>
                        <p class="mt-2 text-gray-500">
                            Kecerdasan buatan kami menganalisis pola data Anda untuk mengidentifikasi pemicu stres dan memberikan prediksi serta saran yang dipersonalisasi.
                        </p>
                    </div>
                    <!-- Fitur 3: Latihan Terpandu -->
                    <div class="text-center p-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center justify-center h-20 w-20 rounded-full bg-mindwell-yellow/20 mx-auto mb-4">
                             <!-- Ganti dengan ikon SVG -->
                            <svg class="w-10 h-10 text-mindwell-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Latihan Pernapasan & Meditasi</h3>
                        <p class="mt-2 text-gray-500">
                            Akses perpustakaan berisi sesi meditasi dan latihan pernapasan terpandu yang dirancang untuk menenangkan pikiran dan meredakan ketegangan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mockup Aplikasi -->
        <section class="bg-gray-50 py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="font-spartan text-4xl font-bold text-mindwell-blue">Lihat Langsung Aplikasinya</h2>
                </div>
                <!-- Ganti dengan URL mockup aplikasi yang besar dan jelas -->
                <img src="https://placehold.co/1200x800/0c1e9f/ffffff?text=Mockup+UI/UX+Aplikasi+MindWell" 
                     alt="[Gambar mockup antarmuka aplikasi MindWell]" 
                     class="rounded-xl shadow-2xl mx-auto"
                     data-aos="zoom-in-up">
            </div>
        </section>

        <!-- Call to Action (CTA) -->
        <section class="py-20">
            <div class="container mx-auto px-6 text-center" data-aos="fade-up">
                <h2 class="font-spartan text-4xl font-bold text-gray-800">Siap Memulai Perjalanan Anda?</h2>
                <p class="mt-3 text-gray-600 max-w-xl mx-auto">
                    Unduh aplikasi MindWell sekarang dan ambil langkah pertama menuju pikiran yang lebih tenang dan sehat.
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <!-- Ganti dengan link App Store dan Play Store Anda -->
                    <a href="#" class="bg-black text-white py-3 px-8 rounded-lg font-semibold hover:bg-gray-800 transition">App Store</a>
                    <a href="#" class="bg-black text-white py-3 px-8 rounded-lg font-semibold hover:bg-gray-800 transition">Google Play</a>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
