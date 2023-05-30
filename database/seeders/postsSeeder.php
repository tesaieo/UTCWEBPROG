<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'postId'=>$i,
                'postCover'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS75ebrwvgVW5Ks_oLfCbG8Httf3_9g-Ynl_Q&usqp=CAU",
                'categoryId' =>rand(1,3),
                'title'=> $faker->sentence(),
                'description' => $faker->paragraph(),
                'author' => $faker->name(),
                'postDate' => $faker->dateTimeBetween('2023-01-01', now()),
                'urlVideo' =>"https://youtu.be/KFdxTX0E2Ow",
                'views' =>rand(1,100),
            ]);

        }
    }
}
