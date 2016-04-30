<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHrProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index()->unsigned();
            $table->string('email');
            $table->string('ic_new')->nullable();
            $table->string('ic_old')->nullable();  
            $table->string('passport_no')->nullable();
            $table->string('division');
            $table->string('department');
            $table->string('unit');
            $table->string('designation');
            $table->string('address');
            $table->string('mailing_address');
            $table->string('mobile');
            $table->string('phone_no');
            $table->string('gender');
            $table->string('type');
            $table->string('status');
            $table->date('join_date');
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
        Schema::drop('hr_profiles');
    }
}
