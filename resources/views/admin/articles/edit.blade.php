<x-admin-layout>
    <x-slot name="header">Edit Artikel</x-slot>
    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.articles.partials.form', ['article' => $article])
        </form>
    </div>
</x-admin-layout>