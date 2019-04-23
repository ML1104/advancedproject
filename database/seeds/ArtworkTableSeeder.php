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
        factory(\App\Artwork::class, 5)->create()->each(function ($q) {
            $q->tags()->attach(App\Tag::find(random_int(1, 10)));
        });
    }
}
