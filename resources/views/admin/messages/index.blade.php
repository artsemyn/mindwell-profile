<x-admin-layout>
    <x-slot name="header">Pesan Masuk</x-slot>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
             <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subjek</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($messages as $message)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $message->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $message->subject }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $message->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <a href="{{ route('admin.messages.show', $message) }}" class="text-indigo-600 hover:text-indigo-900">Lihat</a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="text-center py-4">Tidak ada pesan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-4">{{ $messages->links() }}</div>
    </div>
</x-admin-layout>