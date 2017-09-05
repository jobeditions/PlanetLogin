<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = App\Category::create([
        'order' =>'1',
        'slug' => 'Général-1',
        'name' => 'Général',
        ]);
    }
}
