<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //un post va a perntenecer a un curso
            $table->unsignedBigInteger('curse_id');
            $table->string('name');
            //se le asigna por default que no son gratis
            $table->boolean('free')->default(0);

            $table->timestamps();
            
            $table->foreign('curse_id')->references('id')->on('curses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
