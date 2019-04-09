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
        \App\User::create([
           'id' => 1,
           'name' => 'Admin',
           'email' => 'miloske1104@gmail.com',
           'password' => bcrypt('adminministrator'),
        ]);
    }
}
