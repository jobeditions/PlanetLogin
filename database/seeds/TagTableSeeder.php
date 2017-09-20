<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $tags = App\Tag::create([
        'order' =>'1',
        'slug' => 'Général-1',
        'name' => 'Général',
        ]);
    }
}
