<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'date', 'location', 'image', 'places_available',
        'tickets_booked', 'price', 'status', 'type_reservation', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}