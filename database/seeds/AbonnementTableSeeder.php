<?php

use Illuminate\Database\Seeder;

class AbonnementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $admin=App\Abonnement::create([
            'image' => 'img/ecommerce/product-1.jpg',
            'title' => 'Sony Smart TV - 2015',
            'pricenew' => '$700.00',
            'priceold' => '$800.00',
           ]);

         $admin=App\Abonnement::create([
            'image' => 'img/ecommerce/product-2.jpg',
            'title' => 'Apple new mac book 2015 March :P',
            'pricenew' => '$899.00',
            'priceold' => '$999.00',
           ]);
         $admin=App\Abonnement::create([
            'image' => 'img/ecommerce/product-3.jpg',
            'title' => 'Apple new i phone 6',
            'pricenew' => '$400.00',
            'priceold' => '$425.00',
           ]);
         $admin=App\Abonnement::create([
            'image' => 'img/ecommerce/product-4.jpg',
            'title' => 'Sony playstation microsoft',
            'pricenew' => '$200.00',
            'priceold' => '$250.00',
           ]);
         $admin=App\Abonnement::create([
            'image' => 'img/ecommerce/product-5.jpg',
            'title' => 'Sony Smart Air Condtion',
            'pricenew' => '$1200',
            'priceold' => '$1355',
           ]);
         $admin=App\Abonnement::create([
            'image' => 'img/ecommerce/product-6.jpg',
            'title' => 'Samsung gallaxy note 4',
            'pricenew' => '$400.00',
            'priceold' => '',
           ]);
    }
}
