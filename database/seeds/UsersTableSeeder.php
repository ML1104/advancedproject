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
           'name' => 'Admin',
           'email' => 'miloske1104@gmail.com',
           'surname' => 'Adminator',
           'alias' => 'Adminministrator',
           'supporters' => 5,
           'password' => bcrypt('admin'),
           'about' => 'sv_cheats 1',
        ]);

        factory(\App\User::class, 5)->create();
    }
}
