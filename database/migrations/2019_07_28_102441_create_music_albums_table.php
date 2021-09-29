<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->string('F_name',250);
            $table->string('E_name',250);
            $table->string('singer_Fname',250);
            $table->string('singer_Ename',250);
            $table->string('subject',250);
        //    $table->string('category',250)->default('sdfd');
          //  $table->string('type',1250);
            $table->string('Lyrics',1250);
            $table->string('file_name',1250);
            $table->string('image_name',1250);
            $table->float('file_size')->default(0);
            $table->increments('id');
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
        Schema::dropIfExists('albums');
    }
}
