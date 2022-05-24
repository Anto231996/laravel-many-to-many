<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->words(2,true);
            $newPost->author = $faker->name();
            $newPost->content = $faker->paragraph(5,true);
            $newPost->image_url = "https://picsum.photos/id/$i/350/350";
            $newPost->save();
        }
    }
}
