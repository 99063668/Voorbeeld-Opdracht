<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Resident extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function locations(): belongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
