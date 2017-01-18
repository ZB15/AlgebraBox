<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_maps', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->integer('users_id')->unsigned();
            $table->timestamps();
			
			#Index
			$table->index('users_id');
			
			#Foreign key
			$table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_maps');
    }
}
