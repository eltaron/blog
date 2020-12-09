<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'un-categorized','status'=>1]);
        Category::create(['name'=>'natural','status'=>1]);
        Category::create(['name'=>'flowers','status'=>1]);
        Category::create(['name'=>'kitchen','status'=>0]);
    }
}
