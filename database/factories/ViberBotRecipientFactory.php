<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ViberBotRecipient;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ViberBotRecipient::class, function (Faker $faker) {
    return [
        //
        'viber_key' => Str::random(23).'==',
        'name' => $faker->name,
        'avatar' => $faker->imageUrl,
    ];
});
