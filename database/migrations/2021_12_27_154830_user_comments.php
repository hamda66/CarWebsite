<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('UserComments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('email');
                $table->string('Message');
                $table->string('Country');
                $table->string('Name');
                $table->softDeletes();
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
       Schema::dropIfExists('UserComments');
    }
}
