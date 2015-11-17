<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNiukeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niuke', function(Blueprint $table){  
            $table->increments('id');  
            $table->unsignedInteger('picture_id');  
            $table->unsignedInteger('count');  
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
        Schema::drop('niuke');
    }
}
