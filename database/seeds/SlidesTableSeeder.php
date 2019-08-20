<?php

use Illuminate\Database\Seeder;
use App\Models\Slide;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Slide::class, 3)->create();
    }
}
