<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodDonation extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
