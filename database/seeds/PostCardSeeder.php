<?php

use Illuminate\Database\Seeder;
use App\PostCard;
class PostCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostCard::class, 10)->create();
    }
}
