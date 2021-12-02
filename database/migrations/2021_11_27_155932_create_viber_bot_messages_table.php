<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViberBotMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viber_bot_messages', function (Blueprint $table) {
            // id, bot_id, message_id, recipient, message, message_type, media (json), status, created_at, updated_at
            $table->id();
            $table->bigInteger('bot_id')->unsigned();
            $table->string('message_id');
            $table->string('recipient');
            $table->text('message');
            $table->bigInteger('message_type')->unsigned()->nullable();
            $table->json('media');
            $table->bigInteger('status')->unsigned()->nullable();
            $table->timestamps();
            // отношения:
            // viber_bot_messages.bot_id = viber_user_bots.id | cascade
            // viber_bot_messages.recipient = viber_bot_recipients.viber_key | cascade
            // viber_bot_messages.message_type = viber_bot_message_message_types.id | null
            // viber_bot_messages. status = viber_bot_message_statuses.id | null
            $table->foreign('bot_id')->references('id')->on('viber_user_bots')->onDelete('cascade');
            $table->foreign('recipient')->references('viber_key')->on('viber_bot_recipients')->onDelete('cascade');
            $table->foreign('message_type')->references('id')->on('viber_bot_message_message_types');
            $table->foreign('status')->references('id')->on('viber_bot_message_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viber_bot_messages');
    }
}
