<?php

use Illuminate\Database\Seeder;
use App\ViberBotMessage;
class ViberBotMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(ViberBotMessage::class,500)->create();
    }
}
