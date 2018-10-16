<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'graha_id', 'title', 'desc', 'date_start', 'clock_start', 'date_end', 'clock_end'
    ];

    public function graha()
    {
        return $this->belongsTo(Graha::class, 'graha_id', 'id');
    }
}
