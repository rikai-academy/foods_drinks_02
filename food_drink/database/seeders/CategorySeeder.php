<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            [
                'name'              => 'Food',
                'slug'              => Str::slug('food'),
                'parent_id'         => 0
            ]
        );

        Category::create(
            [
                'name'              => 'Pizza',
                'slug'              => Str::slug('pizza'),
                'parent_id'         => 1
            ]
        );
        Category::create(
            [
                'name'              => 'Pasta',
                'slug'              => Str::slug('pasta'),
                'parent_id'         => 1
            ]
        );

        Category::create(
            [
                'name'              => 'Burgers',
                'slug'              => Str::slug('burgers'),
                'parent_id'         => 1
            ]
        );

        Category::create(
            [
                'name'              => 'Drinks',
                'slug'              => Str::slug('drinks'),
                'parent_id'         => 0
            ]
        );
    }
}
