<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ViberUserBot;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ViberUserBot::class, function (Faker $faker) {
    return [
        //структура:
        // id, user_id, bot_name, bot_key, created_at, updated_at
        // отношения:
        // viber_user_bots.user_id = users.id | cascade
            'user_id' => rand(1,50),
            'bot_name' => $faker->userName,
            'bot_key' => Str::random(16).'-'.Str::random(16).'-'.Str::random(16),
    ];
});
