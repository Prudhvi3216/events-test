<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }

    public function venue()
    {
        return $this->hasOne(Venue::class, 'id', 'venue_id');
    }
}