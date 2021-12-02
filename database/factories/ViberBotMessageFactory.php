<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ViberBotMessage;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ViberBotMessage::class, function (Faker $faker) {
    return [
        //
        //     viber_bot_messages
        // id, bot_id, message_id, recipient, message, message_type, media (json), status, created_at, updated_at
        // отношения:
        // viber_bot_messages.bot_id = viber_user_bots.id | cascade
        // viber_bot_messages.recipient = viber_bot_recipients.viber_key | cascade
        // viber_bot_messages.message_type = viber_bot_message_message_types.id | null
        // viber_bot_messages. status = viber_bot_message_statuses.id | null
        // В этой модели необходимо описать все отношения и методы для получения библиотечных данных для viber_bot_message_message_types и viber_bot_message_statuses

            'bot_id' => rand(1,60),
            'message_id' => Str::random(19),// "message_token": 4912661846655238145,
            'recipient' => function() {return App\ViberBotRecipient::find(rand(1,300))->viber_key;},
            'message' => $faker->paragraph,
            'message_type' => function() {return App\ViberBotMessageMessageType::find(rand(1,10))->id;},
            'media' => json_encode(['media'=>$faker->imageUrl()]),
            'status' => function() {return App\ViberBotMessageStatus::find(rand(1,3))->id;},
    ];
});
