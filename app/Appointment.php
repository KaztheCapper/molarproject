<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['result'];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
