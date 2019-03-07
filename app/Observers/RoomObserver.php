<?php
namespace App\Observers;

use App\Room;
use App\Mail\RoomCreated;
use Illuminate\Support\Facades\Mail;

class RoomObserver
{
    /**
     * Handle the room "created" event.
     *
     * @param  \App\room  $room
     * @return void
     */
    public function created(room $room)
    {
        Mail::to($room->user->email)->send(
            new roomCreated($room)
        );
    }
}