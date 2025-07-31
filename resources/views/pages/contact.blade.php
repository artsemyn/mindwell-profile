<x-app-layout>
    <div class="bg-white">
        <section class="bg-gray-50 py-20 md:py-32">
            <div class="container mx-auto px-6 text-center" data-aos="fade-up">
                <h1 class="font-spartan text-5xl md:text-7xl font-black text-mindwell-blue uppercase">Hubungi Kami</h1>
                <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto text-gray-600">
                    Kami senang mendengar dari Anda. Baik itu pertanyaan, masukan, atau peluang kemitraan.
                </p>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-6 max-w-4xl">
                <div class="bg-white p-8 rounded-lg shadow-xl">
                    <!-- Session Message -->
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert">
                            <p class="font-bold">Berhasil!</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-mindwell-orange" required>
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-bold mb-2">Alamat Email</label>
                                <input type="email" name="email" id="email" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-mindwell-orange" required>
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="subject" class="block text-gray-700 font-bold mb-2">Subjek</label>
                            <input type="text" name="subject" id="subject" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-mindwell-orange" required>
                            @error('subject') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div class="mt-6">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Pesan Anda</label>
                            <textarea name="message" id="message" rows="6" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-mindwell-orange" required></textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div class="mt-6 text-right">
                            <button type="submit" class="bg-mindwell-blue text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>