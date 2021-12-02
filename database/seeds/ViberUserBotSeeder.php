<?php

use Illuminate\Database\Seeder;
use App\ViberUserBot;

class ViberUserBotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(ViberUserBot::class,60)->create();
    }
}
