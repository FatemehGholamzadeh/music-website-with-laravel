<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('F_name',250);
            $table->string('E_name',250);
            $table->string('singer_Fname',250);
            $table->string('singer_Ename',250);
            $table->string('subject',250);
           // $table->string('category',250)->default("dfdsf");
           // $table->string('type',1250);
            $table->string('Lyrics',1250);
            $table->string('file_name',250)->default("dsf");
            $table->string('image_name',250)->default("img");
            $table->string('upload_files',250)->default("sdawe");
            $table->float('file_size')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('musics');
    }
}
