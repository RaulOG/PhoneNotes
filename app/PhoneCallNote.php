<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneCallNote extends Model
{
    /**
     * Get the phone call that owns the note.
     */
    public function phone_call()
    {
        return $this->belongsTo('PhoneCall');
    }
}
