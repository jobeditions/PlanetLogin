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
         $abonnement=App\Abonnement::create([
            'number' =>'1',
            'featured' => 'img/ecommerce/product-1.jpg',
            'title' => 'Sony Smart TV - 2015',
            'slug' => 'Sony Smart TV - 2015',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '700.00',
            'priceold' => '800.00',
            'currency' => '€',
           ]);

         $abonnement=App\Abonnement::create([
            'number' =>'2',
            'featured' => 'img/ecommerce/product-2.jpg',
            'title' => 'Apple new mac book 2015 March :P',
            'slug' => 'Apple new mac book 2015 March :P',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '899.00',
            'priceold' => '999.00',
            'currency' => '€',
           ]);
         $abonnement=App\Abonnement::create([
            'number' =>'3',
            'featured' => 'img/ecommerce/product-3.jpg',
            'title' => 'Apple new i phone 6',
            'slug' => 'Apple new i phone 6',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '400.00',
            'priceold' => '425.00',
            'currency' => '€',
           ]);
         $abonnement=App\Abonnement::create([
            'number' =>'4',
            'featured' => 'img/ecommerce/product-4.jpg',
            'title' => 'Sony playstation microsoft',
            'slug' => 'Sony playstation microsoft',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '200.00',
            'priceold' => '250.00',
            'currency' => '€',
           ]);
         $abonnement=App\Abonnement::create([
            'number' =>'5',
            'featured' => 'img/ecommerce/product-5.jpg',
            'title' => 'Sony Smart Air Condtion',
            'slug' => 'Sony Smart Air Condtion',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '1200',
            'priceold' => '1355',
            'currency' => '€',
           ]);
         $abonnement=App\Abonnement::create([
            'number' =>'6',
            'featured' => 'img/ecommerce/product-6.jpg',
            'title' => 'Samsung gallaxy note 4',
            'slug' => 'Samsung gallaxy note 4',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '400.00',
            'currency' => '€',
           ]);
           $abonnement=App\Abonnement::create([
            'number' =>'7',
            'featured' => 'img/ecommerce/product-4.jpg',
            'title' => 'Sony playstation microsoft',
            'slug' => 'Sony playstation microsoft',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '200.00',
            'priceold' => '250.00',
            'currency' => '€',
           ]);

         $abonnement=App\Abonnement::create([
            'number' =>'8',
            'featured' => 'img/ecommerce/product-2.jpg',
            'title' => 'Apple new mac book 2015 March :P',
            'slug' => 'Apple new mac book 2015 March :P',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '899.00',
            'priceold' => '999.00',
            'currency' => '€',
           ]);
          $abonnement=App\Abonnement::create([
            'number' =>'9',
            'featured' => 'img/ecommerce/product-3.jpg',
            'title' => 'Apple new i phone 6',
            'slug' => 'Apple new i phone 6',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '400.00',
            'priceold' => '425.00',
            'currency' => '€',
           ]);
         $abonnement=App\Abonnement::create([
            'number' =>'10',
            'featured' => 'img/ecommerce/product-4.jpg',
            'title' => 'Sony playstation microsoft',
            'slug' => 'Sony playstation microsoft',
            'category_id' => 1,
            'description' => '
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat  iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.

            Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.',
            'pricenew' => '200.00',
            'priceold' => '250.00',
            'currency' => '€',
           ]);

    }
}
