<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ABOBloodGroup extends Model
{
    public function getAboBloodGroupDisplayAttribute()
    {
        return strtoupper($this->ABO_blood_group);
    }

    public function getRhTypeDisplayAttribute()
    {
        return strtoupper($this->RH_type);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}