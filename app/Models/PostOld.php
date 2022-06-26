<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostOld extends Model
{
    
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function todo() {

        return cache()->rememberForever('posts.all', function () {
        
            return collect(File::files(resource_path("views/posts")))  
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new PostOld(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ))
            ->sortByDesc('date');

        });

        

    }

    public static function find($slug) {
        
        return static::todo()->firstWhere('slug', $slug);
    
    }

    public static function findOrFail($slug) {
        
        $post = static::find($slug);

        if(!$post) {
            throw new ModelNotFoundException();
        }

        return $post;
    
    }
}
