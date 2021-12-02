<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViberBotMessageStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Сид: новое, прочитано, отправлено
        DB::table('viber_bot_message_statuses')->insert(['name' => 'новое']);
        DB::table('viber_bot_message_statuses')->insert(['name' => 'прочитано']);
        DB::table('viber_bot_message_statuses')->insert(['name' => 'отправлено']);
    }
}
