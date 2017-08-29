<?php

use Illuminate\Database\Seeder;

class WebsiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $website=App\Website::create([
            'imageweb' => "img/ecommerce/services_logo__1.jpg",
           ]);
           $website=App\Website::create([
            'imageweb' => "img/ecommerce/services_logo__2.jpg",
           ]);
           $website=App\Website::create([
            'imageweb' =>  "img/ecommerce/services_logo__3.jpg",
           ]);
           $website=App\Website::create([
            'imageweb' => "img/ecommerce/services_logo__4.jpg",
           ]);
           $website=App\Website::create([
            'imageweb' => "img/ecommerce/services_logo__5.jpg",
           ]);
           $website=App\Website::create([
            'imageweb' => "img/ecommerce/services_logo__6.jpg",
           ]);

    }
}
