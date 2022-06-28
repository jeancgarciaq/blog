<x-layout>
        @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/post/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p><strong>Category:</strong> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach
</x-layout>