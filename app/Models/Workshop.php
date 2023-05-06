<?php

namespace App\Models;

use App\Appointment;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    //
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
