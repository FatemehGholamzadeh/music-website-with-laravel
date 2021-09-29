<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->default('username');
            $table->string('F_name',250)->default('نام فارسی');
            $table->string('E_name',250)->default('english name');
            $table->string('phone',250)->default('0000');
            $table->string('email')->unique()->default('1@gmaill.com');
            $table->string('role',250)->default('عادی');
            $table->string('city',250)->default('شهر');
            $table->float('music-size')->default(0);
            $table->string('state')->default('استان');
            $table->string('password')->default('1234');
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
        Schema::dropIfExists('users');
    }
}
