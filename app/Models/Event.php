<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'artiste_name',
        'date',
        'scene',
        'description',
        'horaire',
        'category_id',
    ];

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class,  'category_id');
    }
}
