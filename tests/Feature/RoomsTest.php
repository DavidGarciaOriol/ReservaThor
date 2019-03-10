<?php

namespace Tests\Feature;

use App\Room;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoomsTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function check_room_list()
    {
        $response = $this->get('/rooms');
        
        $response->assertSeeText('View Room');
    }

    /** @test */
    public function check_room_info_page()
    {
        $room = Room::inRandomOrder()->first();

        $this->get('/rooms/'. $room->slug)
            ->assertSee($room->title)
            ->assertSee($room->type->name)
            ->assertSee($room->prize)
            ->assertSee($room->address)
            ->assertSee($room->description);
    }

    /** @test */
    public function check_guest_creating_room()
    {
        $this->get('/rooms/create')
            ->assertRedirect('/login');
    }

    /** @test */
    public function check_user_have_access_to_room_creation_form()
    {
        $this->actingAs( factory('App\User')->create() );

        $this->get('/rooms/create')
            ->assertOk()
            ->assertSee('Save Room');
    }

    /** @test */
    public function check_user_creates_room()
    {
        $this->actingAs( factory('App\User')->create() );
        $room = factory('App\Room')->create();

        $this->post('/rooms', $room->toArray() );

        $this->assertDatabaseHas('rooms', [
            'title'         => $room->title,
            'slug'          => $room->slug,
            'description'   => $room->description,
            'prize'         => $room->prize
        ]);
    }
}