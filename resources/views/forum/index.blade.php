<x-app-layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-spartan font-bold text-mindwell-blue">Forum Diskusi</h1>
                <a href="{{ route('forum.create') }}" class="bg-mindwell-orange text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90 transition duration-300">
                    Buat Postingan Baru
                </a>
            </div>

            <!-- Session Message -->
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="space-y-6">
                @forelse ($posts as $post)
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">
                                    <a href="{{ route('forum.show', $post) }}" class="hover:text-mindwell-blue">{{ $post->title }}</a>
                                </h2>
                                <p class="text-sm text-gray-500 mt-1">
                                    Diposting oleh <span class="font-semibold">{{ $post->user->name }}</span> &bull; {{ $post->created_at->diffForHumans() }}
                                </p>
                            </div>
                            <div class="text-right text-gray-500">
                                <span class="font-semibold">{{ $post->comments->count() }}</span> Komentar
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-16 bg-white rounded-lg">
                        <p class="text-gray-500 text-lg">Belum ada postingan di forum. Jadilah yang pertama!</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>