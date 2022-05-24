<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Food', 'Shopping', 'School', 'Memes', 'Tips', 'Kids', 'Animals'];
        for ($i=0; $i < count($categories) ; $i++) { 
            $newCategory = new Category();
            $newCategory->name = $categories[$i];
            $newCategory->save();
        }
    }
}
