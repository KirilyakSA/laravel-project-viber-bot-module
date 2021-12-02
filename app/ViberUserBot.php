<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViberUserBot extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(ViberBotMessage::class,'bot_id','id');
    }
}
