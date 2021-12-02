<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViberBotMessageMessageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Сид: text, picture, video, file, location, contact, sticker, carousel content, url
        DB::table('viber_bot_message_message_types')->insert(['name' => 'text']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'picture']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'video']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'file']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'location']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'contact']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'sticker']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'carousel']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'content']);
        DB::table('viber_bot_message_message_types')->insert(['name' => 'url']);
    }
}
