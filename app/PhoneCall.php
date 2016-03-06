<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneCall extends Model
{
    /**
     * Get the notes for the phone call.
     */
    public function notes()
    {
        return $this->hasMany(PhoneCallNote::class);
    }
}
