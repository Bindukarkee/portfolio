<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->words($nb = 2, $asText = true);
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => $faker->sentence,
        'status' => 1
    ];
});
