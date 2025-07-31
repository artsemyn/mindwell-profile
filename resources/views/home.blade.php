<x-app-layout>
    <div class="bg-white">
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center text-center overflow-hidden">
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
                        <a href="{{ route('app.features') }}" class="bg-mindwell-orange text-white font-bold py-4 px-10 rounded-full text-lg hover:bg-opacity-90 transition duration-300">
                            Jelajahi Aplikasi
                        </a>
                    </div>
                </div>
            </div>
             <!-- Elemen dekoratif -->
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-mindwell-orange rounded-full -translate-x-1/2 translate-y-1/2" data-aos="fade-right" data-aos-delay="500"></div>
            <div class="absolute top-20 right-20 w-48 h-48 bg-mindwell-yellow rounded-full opacity-50" data-aos-delay="300" data-aos="zoom-in"></div>
        </section>

        <!-- Fitur Unggulan Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6 text-center">
                <h2 class="font-spartan text-4xl font-bold text-mindwell-blue" data-aos="fade-up">Teknologi yang Memahami Anda</h2>
                <p class="mt-4 text-lg text-gray-500 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Kami menggabungkan biofeedback, sensor, dan kecerdasan buatan untuk memberikan wawasan mendalam tentang kondisi mental Anda.
                </p>
                <!-- Tambahkan grid fitur di sini -->
            </div>
        </section>
        
        <!-- Tambahkan section lainnya (Tentang, Testimoni, CTA) -->

    </div>
</x-app-layout>