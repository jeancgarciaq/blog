<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //User::truncate();
        //Post::truncate();
        //Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([

            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([

            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([

            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([

            'title'         => 'My Family Post',
            'slug'          => 'my-family-post',
            'excerpt'       => 'Este es el resumen del post',
            'body'          => 'Este es el cuerpo, donde se desarrolla la idea del post. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi amet, odit, sequi fugiat ipsa corporis tenetur id ea enim sint error dolorum unde ullam doloremque iure, porro laudantium accusamus quam.',
            'category_id'   => $family->id,
            'user_id'       => $user->id 
            
        ]);

        Post::create([

            'title'         => 'My Personal Post',
            'slug'          => 'my-personal-post',
            'excerpt'       => 'Este es el resumen del post',
            'body'          => 'Este es el cuerpo, donde se desarrolla la idea del post. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi amet, odit, sequi fugiat ipsa corporis tenetur id ea enim sint error dolorum unde ullam doloremque iure, porro laudantium accusamus quam.',
            'category_id'   => $personal->id,
            'user_id'       => $user->id 
            
        ]);

        Post::create([

            'title'         => 'My Work Post',
            'slug'          => 'my-work-post',
            'excerpt'       => 'Este es el resumen del post',
            'body'          => 'Este es el cuerpo, donde se desarrolla la idea del post. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi amet, odit, sequi fugiat ipsa corporis tenetur id ea enim sint error dolorum unde ullam doloremque iure, porro laudantium accusamus quam.',
            'category_id'   => $work->id,
            'user_id'       => $user->id 
            
        ]);
    }
}
