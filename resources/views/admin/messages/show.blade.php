<x-admin-layout>
    <x-slot name="header">Detail Pesan</x-slot>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="mb-4">
                <h3 class="text-lg font-semibold">{{ $message->subject }}</h3>
                <p class="text-sm text-gray-600">Dari: {{ $message->name }} &lt;{{ $message->email }}&gt;</p>
                <p class="text-xs text-gray-500">Diterima: {{ $message->created_at->format('d F Y, H:i') }}</p>
            </div>
            <div class="prose max-w-none">
                <p>{{ $message->message }}</p>
            </div>
            <div class="mt-6 flex justify-between items-center">
                <a href="{{ route('admin.messages.index') }}" class="text-sm text-gray-600 hover:text-gray-900">&larr; Kembali ke Pesan Masuk</a>
                <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">Hapus Pesan</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>