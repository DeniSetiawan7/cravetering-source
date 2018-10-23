<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$id_user = date("s") . uniqid();

        App\User::create([
        	'name' => 'Deni Setiawan',
            'slug_uname' => $id_user,
        	'email' => 'deni@deni.com',
        	'password' => bcrypt('123qwe123'),
            'phone' => '081517160115',
            'picture' => 'images/profile/default_picture.jpg',
            'admin' => 1,
            'hasToko' => 0
        ]);
    }
}
