<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    public $timestamps = true;

    // laravel mutator to make title uppercase
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }

    protected $fillable = [
        'title',
        'detail',
        'image',
        'location',
        'social_link',
        'date',
        'created_at',
    ];
    
    protected $casts = [
        'date' => 'datetime:Y-m-d',
      ];
}
