<x-app-layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Tombol Kembali -->
            <a href="{{ route('forum.index') }}" class="inline-flex items-center text-gray-600 hover:text-mindwell-blue mb-6">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Kembali ke Forum
            </a>

            <!-- Postingan Utama -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-4xl font-spartan font-bold text-gray-900">{{ $post->title }}</h1>
                <p class="text-sm text-gray-500 mt-2">
                    Oleh <span class="font-semibold">{{ $post->user->name }}</span> &bull; {{ $post->created_at->format('d F Y, H:i') }}
                </p>

                @can('update', $post)
                    <div class="mt-4">
                        <a href="{{ route('forum.edit', $post) }}" class="text-sm text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('forum.destroy', $post) }}" method="POST" class="inline ml-4" onsubmit="return confirm('Apakah Anda yakin ingin menghapus postingan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-red-500 hover:underline">Hapus</button>
                        </form>
                    </div>
                @endcan

                <div class="prose max-w-none mt-8 text-gray-700 text-lg leading-relaxed">
                    {!! nl2br(e($post->body)) !!}
                </div>
            </div>

            <!-- Form Komentar -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 mt-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Beri Komentar</h2>
                <form action="{{ route('comments.store', $post) }}" method="POST">
                    @csrf
                    <textarea name="body" rows="4" class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring @error('body') border-red-500 @enderror" placeholder="Tulis komentar Anda..." required></textarea>
                    @error('body') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
                    <button type="submit" class="mt-4 bg-mindwell-orange text-white font-bold py-2 px-6 rounded-lg hover:bg-opacity-90 transition">
                        Kirim Komentar
                    </button>
                </form>
            </div>

            <!-- Daftar Komentar -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Komentar ({{ $post->comments->count() }})</h2>
                <div class="space-y-6">
                    @forelse($post->comments as $comment)
                        <div class="bg-white p-5 rounded-lg shadow-sm">
                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-gray-800">{{ $comment->user->name }}</p>
                                @can('delete', $comment)
                                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" onsubmit="return confirm('Yakin hapus komentar ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs text-red-500 hover:underline">Hapus</button>
                                    </form>
                                @endcan
                            </div>
                            <p class="text-gray-500 text-xs">{{ $comment->created_at->diffForHumans() }}</p>
                            <p class="mt-3 text-gray-700">{{ $comment->body }}</p>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center py-4">Belum ada komentar.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>