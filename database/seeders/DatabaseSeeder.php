<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;

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

        //ROLES

        $tag1 = Tag::factory()->create([
            'name' => 'Author',
            
        ]) ;   
        $tag2 = Tag::factory()->create([
            'name' => 'Editor',
            
        ]) ; 

        $tag3 = Tag::factory()->create([
            'name' => 'Publisher',
            
        ]) ; 

        
        $post1 =Post::factory(5)->create([
            'user_id' => $author1->id,
            'category_id' => $category1,
        ]);

        foreach ($post1 as $post) {

            $post->tags()->attach(1);

        }




        // $post1->tags()->attach($post1->id);

        $post2 = Post::factory(5)->create([
            'user_id' => $author2->id,
            'category_id' => $category2,
        ]);

        foreach ($post2 as $post) {

            $post->tags()->attach(2);

        }        // $post2->tags()->attach([2,]);


        $post3 = Post::factory(5)->create([
            'user_id' => $author1->id,
            'category_id' => $category3,
        ]);

        foreach ($post3 as $post) {

            $post->tags()->attach(3);

        }        // $post3->tags()->attach([1,2,3]);

        $post4 =Post::factory(5)->create([
            'user_id' => $author2->id,
            'category_id' => $category1,
        ]);

        foreach ($post4 as $post) {

            $post->tags()->attach(1);

        }        // $post4->tags()->attach([1,3]);

        foreach ($post1 as $post) {

            $post->tags()->attach(2);
            

        }
        
        

        // $this->call([
        //     PostSeeder::class,
        //     CommentSeeder::class,

        // ]);
    
    }
}
