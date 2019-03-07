<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class, 2)->create();
        factory(App\Type::class, 8)->create();
        factory(App\Room::class, 6)->create();
        

        // foreach($rooms as $room){
        //     $room->owners()->attach(
        //         $owners->random(random_int(1,3))
        //     );
        // }
        
    }
}