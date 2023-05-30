<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
        $categories = ['Quick Reads', 'Medium Reads', 'Long Reads'];
        for ($i = 0; $i < count($categories); $i++) {
            Category::create([
                'categoryId' => $i + 1,
                'categoryName' => $categories[$i]
            ]);
        }
    }
}
