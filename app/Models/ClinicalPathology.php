<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicalPathology extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
