<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table)
        {            
            $table->increments('id'); 
            $table->integer('country_id')->unsigned();
            $table->string('name');
            $table->string('code',11);
            $table->string('city')->nullable();
            $table->timestamps();
            
            $table->foreign('country_id')
                  ->references('numeric_code')->on('countries')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('banks');
    }
}
