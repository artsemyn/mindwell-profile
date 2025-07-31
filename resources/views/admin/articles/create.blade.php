<x-admin-layout>
    <x-slot name="header">Tambah Artikel Baru</x-slot>
    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.articles.partials.form')
        </form>
    </div>
</x-admin-layout>