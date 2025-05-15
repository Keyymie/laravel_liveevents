<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointMap extends Model
{
    protected $table = 'point_map';

    protected $fillable = [
        'name',
        'content',
        'type',
        'latitude',
        'longitude',
    ];

    public $timestamps = false; 
}
