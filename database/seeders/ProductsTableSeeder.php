<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = DB::table('categories')->whereNotNull('parent_id')->get();
        $size = ['xs', 's', 'm', 'l', 'xl'];
        foreach ($categories as $category) {
            foreach (range(1, 10) as $index) {
                $size_key = array_rand($size, 1);
                DB::table('products')->insert([
                    'title' => Str::random(10),
                    'product_slug' => Str::random(10),
                    'SKU' => Str::random(10),
                    'price' => '2000',
                    'size' => $size[$size_key],
                    'description' => Str::random(10),
                    'stock' => '10',
                    'Category_id' => $category->id,
                ]);
            }
        }
    }
}
