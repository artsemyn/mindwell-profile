<div>
    <div class="mb-4">
        <label for="title" class="block text-gray-700 font-bold mb-2">Judul Artikel</label>
        <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none" value="{{ old('title', $article->title ?? '') }}" required>
    </div>
    <div class="mb-4">
        <label for="body" class="block text-gray-700 font-bold mb-2">Isi Artikel</label>
        <textarea name="body" id="body" rows="15" class="w-full px-4 py-2 border rounded-lg focus:outline-none">{{ old('body', $article->body ?? '') }}</textarea>
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 font-bold mb-2">Gambar Utama</label>
        <input type="file" name="image" id="image" class="w-full">
        @isset($article)
            @if($article->image_path)
            <img src="{{ asset('storage/' . $article->image_path) }}" alt="Current Image" class="w-48 mt-4 rounded">
            @endif
        @endisset
    </div>
    <div class="mb-6">
        <label class="inline-flex items-center">
            <input type="checkbox" name="is_published" value="1" class="rounded" @if(old('is_published', isset($article) && $article->published_at)) checked @endif>
            <span class="ml-2">Publikasikan Artikel</span>
        </label>
    </div>
    <div class="flex justify-end">
        <a href="{{ route('admin.articles.index') }}" class="px-6 py-2 text-gray-600 mr-4">Batal</a>
        <button type="submit" class="bg-mindwell-blue text-white font-bold py-2 px-6 rounded-lg">Simpan</button>
    </div>
</div>