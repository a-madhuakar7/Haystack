<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_claims', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->integer()->unsigned();
            $table->integer('claim_id')->integer()->unsigned(); 
            $table->integer('amount');  
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
        Schema::drop('user_claims');
    }
}
