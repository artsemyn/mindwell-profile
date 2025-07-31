<x-app-layout>
    <div class="bg-white">
        <section class="bg-mindwell-blue text-white py-20 md:py-32">
            <div class="container mx-auto px-6 text-center" data-aos="fade-up">
                <h1 class="font-spartan text-5xl md:text-7xl font-black uppercase">Produk Kami</h1>
                <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto text-gray-300">
                    Alat canggih yang dirancang untuk memberikan wawasan nyata tentang kesehatan mental Anda.
                </p>
            </div>
        </section>

        <!-- Produk 1: Biofeedback Headband -->
        <section class="py-20">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" class="text-center">
                     <!-- Ganti dengan URL mockup 3D produk -->
                    <img src="https://placehold.co/500x400/ea5b37/ffffff?text=Mockup+3D+Headband" alt="MindWell Biofeedback Headband" class="rounded-lg shadow-xl mx-auto">
                </div>
                <div data-aos="fade-left">
                    <h2 class="font-spartan text-4xl font-bold text-gray-800">MindWell Aura™ Headband</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Aura™ adalah headband biofeedback non-invasif yang menggunakan sensor EEG untuk memantau aktivitas gelombang otak Anda secara real-time. Data ini diterjemahkan menjadi wawasan tentang tingkat fokus, relaksasi, dan stres Anda, yang dapat Anda lihat langsung di aplikasi MindWell.
                    </p>
                    <ul class="mt-6 space-y-2 text-gray-700">
                        <li>&#10003; Sensor EEG Kering Presisi Tinggi</li>
                        <li>&#10003; Konektivitas Bluetooth 5.0</li>
                        <li>&#10003; Desain Ergonomis dan Ringan</li>
                        <li>&#10003; Baterai Tahan Hingga 8 Jam</li>
                    </ul>
                </div>
            </div>
        </section>

         <!-- Produk 2: Aplikasi MindWell -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" class="md:order-2 text-center">
                    <!-- Ganti dengan URL mockup aplikasi -->
                    <img src="https://placehold.co/500x400/0c1e9f/ffffff?text=Mockup+Aplikasi" alt="Aplikasi MindWell" class="rounded-lg shadow-xl mx-auto">
                </div>
                <div data-aos="fade-left" class="md:order-1">
                    <h2 class="font-spartan text-4xl font-bold text-gray-800">Aplikasi MindWell</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Pusat kendali untuk ekosistem MindWell. Aplikasi kami tidak hanya menampilkan data dari perangkat biofeedback, tetapi juga menyediakan jurnal digital, latihan pernapasan terpandu, dan analisis tren kesehatan mental Anda dari waktu ke waktu dengan bantuan AI.
                    </p>
                     <a href="{{ route('app.features') }}" class="mt-6 inline-block bg-mindwell-orange text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition">
                        Lihat Fitur Aplikasi &rarr;
                    </a>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>