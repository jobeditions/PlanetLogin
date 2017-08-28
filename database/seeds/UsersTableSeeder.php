<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user=App\User::create([
            'name' => 'John Dunkrik',
            'email' => 'jesusforgives1@gmail.com',
            'password' => bcrypt('password'),
            
           ]);
        $user1=App\User::create([
            'name' => 'Garfield Ryan',
            'email' => 'jesusforgives2@gmail.com',
            'password' => bcrypt('password'),
            
           ]);
        
    }
}
