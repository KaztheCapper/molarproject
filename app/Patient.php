<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function appointments(){

        return $this->hasMany(Appointment::class);
    }

    public function addAppointment(Appointment $appointment)
    {
        return $this->appointments()->save($appointment);
    }
}
