<x-admin-layout>
    <x-slot name="header">Manajemen Forum</x-slot>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-xl font-semibold mb-4">Semua Postingan</h2>
            <!-- Tabel Postingan -->
            <table class="min-w-full divide-y divide-gray-200">
                 <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pembuat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Komentar</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($posts as $post)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('forum.show', $post) }}" target="_blank" class="text-indigo-600 hover:underline">{{ Str::limit($post->title, 40) }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $post->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $post->comments_count }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <form action="{{ route('admin.forum.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus postingan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-4">{{ $posts->links() }}</div>
    </div>
</x-admin-layout>