<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostCard;
use Faker\Generator as Faker;

$factory->define(PostCard::class, function (Faker $faker) {
    return [
        'sender' => $faker -> name(),
        'address' => $faker -> sentence(), 
        'text'=> $faker -> text(), 
        'image'=> null,
    ];
});
