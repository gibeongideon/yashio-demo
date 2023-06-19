<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $author1 = User::factory()->create([
            'name' => 'Gideon Gibeon'
        ]);
        $author2 = User::factory()->create([
            'name' => 'Rock Peters'
        ]);    
        

        $author2 = User::factory()->create([
            'name' => 'Rock Peters'
        ]);    
        
        $category1 = Category::factory()->create([
            'name' => 'Music',

        ]);

        $category2 = Category::factory()->create([
            'name' => 'Code and Programming',
            
        ]) ; 

        $category3 = Category::factory()->create([
            'name' => 'Fashion',
            
        ]) ;   


        Post::factory(5)->create([
            'user_id' => $author1->id,
            'category_id' => $category1,
        ]);

        Post::factory(5)->create([
            'user_id' => $author2->id,
            'category_id' => $category2,
        ]);


        Post::factory(5)->create([
            'user_id' => $author1->id,
            'category_id' => $category3,
        ]);

        Post::factory(5)->create([
            'user_id' => $author2->id,
            'category_id' => $category1,
        ]);

        
        

        // $this->call([
        //     PostSeeder::class,
        //     CommentSeeder::class,

        // ]);
    
    }
}
