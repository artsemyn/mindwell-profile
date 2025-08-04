<x-admin-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <!-- Tombol Aksi untuk Mobile -->
    <div class="sm:hidden mb-6">
         <a href="{{ route('admin.articles.create') }}" class="w-full flex items-center justify-center bg-mindwell-orange text-white font-bold py-3 px-4 rounded-lg hover:bg-opacity-90 transition text-sm">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Tambah Artikel Baru
        </a>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h3 class="text-lg font-medium text-gray-500">Total Pengguna</h3>
            <p class="mt-1 text-4xl font-bold text-mindwell-blue">{{ $stats['users'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h3 class="text-lg font-medium text-gray-500">Total Postingan Forum</h3>
            <p class="mt-1 text-4xl font-bold text-mindwell-blue">{{ $stats['posts'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h3 class="text-lg font-medium text-gray-500">Pesan Masuk</h3>
            <p class="mt-1 text-4xl font-bold text-mindwell-blue">{{ $stats['messages'] }}</p>
        </div>
    </div>

    <!-- Pesan Terbaru -->
    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Pesan Terbaru dari Pengguna</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subjek</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($latestMessages as $message)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $message->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $message->subject }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $message->created_at->format('d M Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('admin.messages.show', $message) }}" class="text-indigo-600 hover:text-indigo-900">Lihat</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada pesan masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
