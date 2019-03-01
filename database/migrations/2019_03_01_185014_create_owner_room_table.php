<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_room', function (Blueprint $table) {
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('room_id');
            $table->primary(['owner_id','room_id']);
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owner_room');
    }
}