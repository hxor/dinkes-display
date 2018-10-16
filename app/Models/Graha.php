<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graha extends Model
{
    protected $table = 'graha';
    protected $fillable = [
        'title'
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'graha_id', 'id');
    }
}
