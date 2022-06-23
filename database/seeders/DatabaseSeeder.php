<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*  User::truncate();
        Category::truncate();
        Post::truncate();
 */

       $user =  User::factory()->create([
            'name' => 'Michał'

        ]);
         Post::factory(10)->create([
             'user_id' => $user->id
         ]);
        /* $user = User::factory()->create(); */

        /*   Category::create([
         'name' => 'Personal',
         'slug' => 'personal'
     ]);
     Category::create([
        'name' => 'Family',
        'slug' => 'family'
    ]);
  $work =  Category::create([
        'name' => 'Work',
        'slug' => 'work'
    ]);
    Post::create([
        'user_id'=> $user->id,
        'category_id'=> $work->id,
        'slug' => 'slug',
        'title' => 'tttt',
        'excerpt' => 'eeeeee',
        'body' => 'fjfjskdjbkjbkjb sdfjnj'
    ]); */
    }
}
