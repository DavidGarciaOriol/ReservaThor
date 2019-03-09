<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name', 'user_id', 'room_id', 'slug', 'totalPrize', 'startDate', 'startDate'];

    public function rooms(){
        return $this->belongsTo(Room::class);
    }
}
