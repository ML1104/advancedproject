<?php

use Illuminate\Database\Seeder;

class ArtworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Artwork::class, 5)->create();
    }
}
