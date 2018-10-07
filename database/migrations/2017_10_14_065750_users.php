<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('number');
            $table->string('quantity');
            $table->string('from');
            $table->string('from_address');
            $table->string('to');
            $table->string('to_address');
            $table->integer('trackid');
            $table->string('status');
            $table->string('amount');

            $table->string('item_name')->nullable();
            $table->string('reciever_name')->nullable();
            $table->string('next_of_kin')->nullable();
            $table->string('delivery_option')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('comment')->nullable();
            $table->string('weight')->nullable();
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
       Schema::drop('users');
    }
}
