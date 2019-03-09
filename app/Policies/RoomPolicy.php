<?php
namespace App\Policies;

use App\User;
use App\Room;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoomPolicy
{
    use HandlesAuthorization;
    public function before($user, $ability){
        if( $user->id == 2 ) return true;
    }
    
    /**
     * Determine whether the user can update the room.
     *
     * @param  \App\User  $user
     * @param  \App\Room  $room
     * @return mixed
     */
    public function touch(User $user, Room $room)
    {
        return $room->user_id == $user->id || $user->id == 2;
    }
}