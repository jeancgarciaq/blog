<x-layout>
        @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/post/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach
</x-layout>