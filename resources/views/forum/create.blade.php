<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <h1 class="text-3xl font-spartan font-bold text-mindwell-blue mb-6">Buat Postingan Baru</h1>
                    <form action="{{ route('forum.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror" value="{{ old('title') }}" required>
                            @error('title') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                        </div>
                        <div class="mb-6">
                            <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Isi Postingan:</label>
                            <textarea name="body" id="body" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('body') border-red-500 @enderror" required>{{ old('body') }}</textarea>
                            @error('body') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                        </div>
                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-mindwell-blue hover:bg-opacity-90 text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline">
                                Publikasikan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>