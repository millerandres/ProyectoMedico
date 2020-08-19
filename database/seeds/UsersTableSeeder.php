<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([

    	'name' => 'Miller Caro',
        'email' => 'mcaro@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('1234'), // password
        'dni' => '1113632364',
        'addres' => '',
        'phone' => '',
        'role' =>'admin'
    	]);

        factory(User::class,50)->create();
    }
}
