<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AbonnementTableSeeder::class);
        $this->call(WebsiteTableSeeder::class);
        $this->call(AnnounceTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
    }
}
