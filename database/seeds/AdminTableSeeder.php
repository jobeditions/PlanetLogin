<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=App\Admin::create([
            'name' => 'Marcella Sandrine',
            'email' => 'jobeditions@gmail.com',
            'password' => bcrypt('password'),
            'job_title' => 1,
           ]);
    }
}
