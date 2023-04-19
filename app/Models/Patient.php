<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    public function getAgeDisplayAttribute()
    {
        return $this->age . ' ' . $this->age_type;
    }
}
