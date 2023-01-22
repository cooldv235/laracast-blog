<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        // Post::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'Dushyant'
        ]);

        $user2 = User::factory()->create([
            'name' => 'John'
        ]); 

        Post::factory(5)->create([
            'user_id' => $user1->id
        ]);

        Post::factory(5)->create([
            'user_id' => $user2->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'This is my family post',
        //     'body' => 'ahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjk'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'This is my work post',
        //     'body' => 'ahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjk'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'This is my personal post',
        //     'body' => 'ahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjkahsdf kjhsdjk fhajsdhfjkhsdafkjhsdkjfhjskadhfkjsdahfkjashdfkjsdfa kjhsdfkjhasdjk'
        // ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
