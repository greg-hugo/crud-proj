<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')
                                       ->on('genres')
                                       ->onDelete('cascade')
                                       ->onUpdate('cascade');
            $table->string('title');
            $table->string('dev');
            $table->date('release');
            $table->double('price', 4, 2);
            $table->double('rating', 2, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
