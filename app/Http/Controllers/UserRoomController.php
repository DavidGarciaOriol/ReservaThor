<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserRoomController extends Controller
{
    public function index($userSlug)
    {
        $user = User::where('slug', $userSlug)->firstOrFail();
        $rooms = $user->rooms()->paginate(10);
        
        return view('public.userrooms.index',[
            'user'  => $user,
            'rooms' => $rooms
        ]);
    }
}
