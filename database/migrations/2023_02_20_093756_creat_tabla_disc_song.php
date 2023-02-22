<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc_song', function (Blueprint $table) {
            $table->unsignedBigInteger("disc_id");
            $table->unsignedBigInteger("song_id");
            $table->timestamps();
            $table->foreign("disc_id")->references("id")->on("discs")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("song_id")->references("id")->on("songs")->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disc_song');
    }
};
