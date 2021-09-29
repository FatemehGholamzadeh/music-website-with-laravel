<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->smallInteger('payment_method');
            $table->string('payment_getway_name','250');
            $table->string('payment_res_name','250');
            $table->string('payment_ref_id','250');
            $table->integer('payment_amount');
            $table->dateTime('payment_created_at');
            $table->dateTime('payment_updated_at');
            $table->smallInteger('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
