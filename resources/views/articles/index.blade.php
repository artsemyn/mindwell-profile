<x-app-layout>
    <section class="bg-gray-50 py-20 md:py-24">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h1 class="font-spartan text-5xl md:text-7xl font-black text-mindwell-blue uppercase">Insights & Articles</h1>
            <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto text-gray-600">
                Wawasan terbaru dari para ahli kami tentang psikologi, teknologi, dan kesehatan mental.
            </p>
        </div>
    </section>
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($articles as $article)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up">
                        <a href="{{ route('articles.show', $article) }}">
                            <img src="{{ $article->image_path ? asset('storage/' . $article->image_path) : 'https://placehold.co/600x400/dfd6d6/333333?text=MindWell' }}" alt="{{ $article->title }}" class="w-full h-56 object-cover">
                        </a>
                        <div class="p-6">
                            <p class="text-sm text-gray-500">{{ $article->published_at->format('d F Y') }}</p>
                            <h2 class="mt-2 text-xl font-bold text-gray-800 hover:text-mindwell-blue">
                                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
                            </h2>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-500">Belum ada artikel yang dipublikasikan.</p>
                @endforelse
            </div>
            <div class="mt-12">{{ $articles->links() }}</div>
        </div>
    </section>
</x-app-layout>