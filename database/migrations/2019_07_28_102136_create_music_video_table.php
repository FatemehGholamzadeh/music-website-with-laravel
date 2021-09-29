<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicvideos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('F_name',250);
            $table->string('E_name',250);
            $table->string('singer_Fname',250);
            $table->string('singer_Ename',250);
            $table->string('subject',250);
         //   $table->string('category',1250);
         //   $table->string('type',1250);
            $table->string('image_name',1250)->default("imge");
            $table->string('file_name',250)->default("dsf");
            $table->string('upload_files',250)->default("sdawe");
            $table->float('file_size_musicvideo')->default(0);
            $table->float('file_size_image')->default(0);
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
        Schema::dropIfExists('musicvideos');
    }
}
