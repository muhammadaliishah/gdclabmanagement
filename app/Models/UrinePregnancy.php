<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrinePregnancy extends Model
{
    public function getUrinePregnancyTestDisplayAttribute()
    {
        return strtoupper($this->urine_pregnancy_test);
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
