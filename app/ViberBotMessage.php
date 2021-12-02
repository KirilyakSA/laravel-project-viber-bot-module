<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViberBotMessage extends Model
{
    //
    //     viber_bot_messages
    // id, bot_id, message_id, recipient, message, message_type, media (json), status, created_at, updated_at
    // отношения:
    // viber_bot_messages.bot_id = viber_user_bots.id | cascade
    // viber_bot_messages.recipient = viber_bot_recipients.viber_key | cascade
    // viber_bot_messages.message_type = viber_bot_message_message_types.id | null
    // viber_bot_messages. status = viber_bot_message_statuses.id | null
    // В этой модели необходимо описать все отношения и методы для получения библиотечных данных для viber_bot_message_message_types и viber_bot_message_statuses


    public function viberBot()
    {
        //
        return $this->belongsTo(ViberUserBot::class,'bot_id','id');
    }

    public function sender()
    {
        //
        return $this->belongsTo(ViberBotRecipient::class,'recipient','viber_key');
    }

    public function messageType()
    {
        //
        return $this->belongsTo(ViberBotMessageMessageType::class,'message_type','id');
    }

    public function messageStatus()
    {
        //
        return $this->belongsTo(ViberBotMessageStatus::class,'status','id');
    }

}
