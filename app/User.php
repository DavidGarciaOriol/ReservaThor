<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rooms(){
        return $this->hasMany(Room::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function owns(Room $room){
        return $this->id == $room->user_id;
    }

    // public function ownsReservation(Reservation $reservation){
    //     return $this->id == $reservation->user_id;
    // }

}
