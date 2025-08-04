<x-app-layout>
    <div class="bg-white">
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center text-center">
            <div class="absolute inset-0 bg-mindwell-blue opacity-5 z-0"></div>
            <div class="container mx-auto px-6 z-10">
                <div data-aos="fade-up">
                    <h1 class="font-spartan text-5xl md:text-8xl font-black text-mindwell-blue uppercase tracking-tighter">
                        Inovasi Untuk <br class="hidden md:block"> Ketenangan Pikiran
                    </h1>
                    <p class="mt-6 text-lg md:text-xl max-w-3xl mx-auto text-gray-600" style="font-size: 20px; line-height: 1.6;">
                        MindWell adalah pionir dalam psikoteknologi, menghadirkan solusi canggih untuk memantau dan meningkatkan kesehatan mental Anda secara proaktif.
                    </p>
                    <div class="mt-10">
                        <a href="{{ route('app.features') }}" class="bg-mindwell-orange text-white font-bold py-4 px-10 rounded-full text-lg hover:bg-opacity-90 transition duration-300 btn">
                            Jelajahi Aplikasi
                        </a>
                    </div>
                </div>
            </div>
             <!-- Elemen dekoratif -->
            <div class="absolute bottom-20 left-20 w-32 h-32 bg-mindwell-orange rounded-full -translate-x-1/2 translate-y-1/2 decorative-circle"></div>
            <div class="absolute bottom-30 right-20 w-32 h-32 bg-mindwell-orange rounded-full -translate-x-1/2 translate-y-1/2 decorative-circle"></div>
            <div class="absolute top-20 right-20 w-48 h-48 bg-mindwell-yellow rounded-full opacity-50 decorative-circle"></div>
            <div class="absolute top-20 left-20 w-48 h-48 bg-mindwell-yellow rounded-full opacity-50 decorative-circle"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-mindwell-yellow rounded-full opacity-50 decorative-circle"></div>
        </section>

        <!-- Fitur Unggulan Section -->
        <section class="relative py-20">
            <div class="absolute inset-0 bg-mindwell-blue opacity-5 z-0"></div>
            <!-- Elemen dekoratif -->
            <div class="absolute top-0 left-0 w-40 h-40 bg-mindwell-yellow rounded-full -translate-x-1/4 -translate-y-1/4 opacity-60 decorative-circle"></div>
            <div class="absolute bottom-0 right-0 w-56 h-56 bg-mindwell-orange rounded-full translate-x-1/4 translate-y-1/4 opacity-60 decorative-circle"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h2 class="font-spartan text-4xl font-bold text-mindwell-blue" data-aos="fade-up">Teknologi yang Memahami Anda</h2>
                <p class="mt-4 text-lg text-gray-500 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Kami menggabungkan biofeedback, sensor, dan kecerdasan buatan untuk memberikan wawasan mendalam tentang kondisi mental Anda.
                </p>
            </div>
        </section>

        <!-- Produk & Layanan Section -->
        <section class="relative py-20">
            <div class="absolute inset-0 bg-mindwell-blue opacity-5 z-0"></div>
            <!-- Elemen dekoratif -->
            <div class="absolute bottom-30 right-0 w-32 h-32 bg-mindwell-orange rounded-full translate-x-1/4 -translate-y-1/4 opacity-60 decorative-circle" data-aos="fade-left"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-mindwell-yellow rounded-full -translate-x-1/3 -translate-y-1/4 opacity-50 decorative-circle"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h2 class="font-spartan text-4xl font-bold text-mindwell-blue" data-aos="fade-up">Produk & Layanan Kami</h2>
                <p class="mt-4 text-lg text-gray-500 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Solusi terintegrasi untuk individu dan organisasi yang peduli terhadap kesejahteraan mental.
                </p>
                <div class="mt-16 grid md:grid-cols-3 gap-12">
                    <!-- Card Produk (z-10 ditambahkan agar di atas elemen dekoratif) -->
                    <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300 z-10" data-aos="fade-up" data-aos-delay="200">
                        <div class="bg-mindwell-blue text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-spartan text-2xl font-bold text-mindwell-blue mt-6">Aplikasi MindWell</h3>
                        <p class="mt-3 text-gray-500">
                            Pantau stres, fokus, dan kualitas tidur Anda secara real-time dengan perangkat canggih dan aplikasi intuitif kami.
                        </p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300 z-10" data-aos="fade-up" data-aos-delay="300">
                        <div class="bg-mindwell-orange text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 4h5m-5 4h5" />
                            </svg>
                        </div>
                        <h3 class="font-spartan text-2xl font-bold text-mindwell-blue mt-6">MindWell untuk Bisnis</h3>
                        <p class="mt-3 text-gray-500">
                            Program kesehatan mental komprehensif untuk meningkatkan produktivitas dan kesejahteraan karyawan di lingkungan kerja.
                        </p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300 z-10" data-aos="fade-up" data-aos-delay="400">
                        <div class="bg-mindwell-yellow text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a2 2 0 01-2-2V7a2 2 0 012-2h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V8z" />
                            </svg>
                        </div>
                        <h3 class="font-spartan text-2xl font-bold text-mindwell-blue mt-6">Sesi Konsultasi</h3>
                        <p class="mt-3 text-gray-500">
                            Dapatkan panduan dari para ahli psikologi dan neurosains kami untuk memaksimalkan potensi kesehatan mental Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Tentang Kami Section -->
        <section class="relative py-20">
            <div class="absolute inset-0 bg-mindwell-blue opacity-5 z-0"></div>
            <!-- Elemen dekoratif -->
            <div class="absolute top-1/2 left-0 w-48 h-48 bg-mindwell-orange rounded-full -translate-x-1/2 -translate-y-1/2 opacity-50 decorative-circle"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="md:flex items-center justify-between">
                    <div class="md:w-1/2" data-aos="fade-right">
                        <h2 class="font-spartan text-4xl font-bold text-mindwell-blue">Misi Kami: Memberdayakan Pikiran</h2>
                        <p class="mt-4 text-lg text-gray-600">
                            Di MindWell, kami percaya bahwa kesehatan mental adalah fondasi dari kehidupan yang bahagia dan produktif. Misi kami adalah menyediakan teknologi yang dapat diakses dan mudah digunakan untuk membantu setiap individu memahami, mengelola, dan meningkatkan kesejahteraan mental mereka.
                        </p>
                        <p class="mt-4 text-lg text-gray-600">
                            Kami adalah tim yang terdiri dari psikolog, insinyur, dan desainer yang bersemangat untuk menciptakan masa depan di mana setiap orang memiliki alat untuk menjaga pikiran mereka, sama seperti mereka menjaga tubuh mereka.
                        </p>
                        <div class="mt-8">
                            <a href="{{ route('about') }}" class="inline-block bg-mindwell-orange text-white font-bold py-3 px-8 rounded-full text-base hover:bg-opacity-90 transition duration-300 btn">Pelajari Lebih Lanjut &rarr;</a>
                        </div>
                    </div>
                    <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center" data-aos="fade-left" data-aos-delay="200">
                        <img src="https://via.placeholder.com/500x400.png/E0F2FE/1E3A8A?text=MindWell+Team" alt="Tim MindWell" class="rounded-lg shadow-xl relative z-10">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimoni Section -->
        <section class="relative py-20">
            <div class="absolute inset-0 bg-mindwell-blue opacity-5 z-0"></div>
            <!-- Elemen dekoratif -->
            <div class="absolute -top-15 -right-10 w-72 h-72 bg-mindwell-yellow rounded-full opacity-50 decorative-circle"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h2 class="font-spartan text-4xl font-bold text-mindwell-blue" data-aos="fade-up">Apa Kata Mereka?</h2>
                <div class="mt-12 max-w-4xl mx-auto relative">
                    <!-- Testimoni 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                        <p class="text-gray-600 text-xl italic">"Aplikasi MindWell benar-benar mengubah cara saya mengelola stres. Fitur biofeedback-nya luar biasa dan sangat membantu saya untuk tetap tenang selama hari kerja yang sibuk."
                        </p>
                        <div class="mt-6">
                            <p class="font-bold text-mindwell-blue">Sarah L.</p>
                            <p class="text-sm text-gray-400">Pengguna Aplikasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="relative">
            <div class="absolute inset-0 bg-mindwell-blue opacity-5 z-0"></div>
            <!-- Elemen dekoratif -->
            <div class="absolute top-20 left-1/4 w-96 h-96 bg-mindwell-orange rounded-full -translate-x-1/2 -translate-y-1/2 opacity-20 decorative-circle"></div>
            <div class="container mx-auto px-6 py-20 text-center relative z-10">
                <h2 class="font-spartan text-4xl font-bold text-mindwell-blue" data-aos="fade-up">Siap Mengambil Kendali Atas Kesejahteraan Mental Anda?</h2>
                <p class="mt-4 text-lg max-w-2xl mx-auto text-gray-600" data-aos="fade-up" data-aos-delay="100">
                    Mulailah perjalanan Anda menuju pikiran yang lebih sehat dan lebih bahagia hari ini. Unduh aplikasi MindWell atau hubungi tim kami untuk solusi korporat.
                </p>
                <div class="mt-10" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('app.features') }}" class="bg-mindwell-orange text-white font-bold py-4 px-10 rounded-full text-lg hover:bg-opacity-90 transition duration-300 btn">
                        Jelajahi Aplikasi
                    </a>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>