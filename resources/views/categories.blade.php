<x-layout>
	@foreach ($post as $posts)
        <article>
            <h1>            
                    {{ $posts->title }}    
            </h1>
            <p>
                    by <a href="#">{{$posts->user->name}}</a> <a href="/categories/{{ $posts->category->slug }}"> {{ $posts->category->name }} </a>
            </p>     
            <p>
                    {{ $posts->body }}    
                
            </p>
            <a href="/">Atrás</a>
        </article>
	@endforeach
</x-layout>
