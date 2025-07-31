<x-app-layout>
    <div class="py-12 md:py-20">
        <div class="container mx-auto px-6 max-w-4xl">
            <article>
                <header class="text-center mb-12">
                     <p class="text-sm text-gray-500">{{ $article->published_at->format('d F Y') }}</p>
                    <h1 class="font-spartan text-4xl md:text-6xl font-black text-mindwell-blue mt-2">{{ $article->title }}</h1>
                </header>
                @if($article->image_path)
                    <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}" class="w-full h-auto max-h-[500px] object-cover rounded-lg shadow-xl mb-12">
                @endif
                <div class="prose lg:prose-xl max-w-none mx-auto text-gray-700 leading-relaxed">
                    {!! nl2br(e($article->body)) !!}
                </div>
            </article>
        </div>
    </div>
</x-app-layout>