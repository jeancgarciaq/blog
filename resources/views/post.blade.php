<x-layout>
        <article>
            <h1>
                    {{ $post->title }}    
            </h1>
            <p>
                    by <a href="#">El Autor</a> | <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
            </p>     
            <p>
                    {{ $post->body }}
            </p>
            <a href="/">Atrás</a>
        </article>
</x-layout>
