<x-layout>
        <article>
            <h1>
                @foreach ($post as $posts)
                    {{ $posts->title }}    
                @endforeach
                
            </h1>
            <p>
                @foreach ($post as $posts)
                    by <a href="#">{{$posts->user->name}}</a> <a href="/categories/{{ $posts->category->slug }}"> {{ $posts->category->name }} </a>    
                @endforeach
                
            </p>     
            <p>
                @foreach ($post as $posts)
                    {{ $posts->body }}    
                @endforeach
            </p>
            <a href="/">Atrás</a>
        </article>
</x-layout>
