<x-admin-layout>
    <x-slot name="header">Manajemen Artikel</x-slot>
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.articles.create') }}" class="bg-mindwell-blue text-white font-bold py-2 px-4 rounded-lg hover:bg-opacity-90">
            + Tambah Artikel Baru
        </a>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($articles as $article)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $article->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($article->published_at)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Draft</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline ml-4" onsubmit="return confirm('Yakin hapus artikel ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="3" class="text-center py-4">Belum ada artikel.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-4">{{ $articles->links() }}</div>
    </div>
</x-admin-layout>