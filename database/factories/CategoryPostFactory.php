<?php

/** @var Factory $factory */

use App\Models\CategoryPost;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(CategoryPost::class, function (Faker $faker) {
    return [
        'post_id' => $faker->unique()->numberBetween(1, 8888),
        'category_id' => 1
    ];
});
