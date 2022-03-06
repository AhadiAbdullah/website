<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    public $timestamps = true;

    // laravel mutator to make title uppercase
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }

    protected $fillable = [
        'title',
        'description',
        'image',
        'created_at',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime:Y-m-d',
      ];
}
