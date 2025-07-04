<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = [
        'date'
    ];

    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
