<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    protected $fillable = [
        'title', 'logo', 'color_header', 'color_footer', 'color_clock', 'color_text'
    ];
}
