<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 80);
            $table->string('email', 91)->unique();
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->text('address', 80);
            $table->string('date_of_birth', 90);
            $table->string('position', 30);
            $table->integer('squad_number')->unique();
            $table->string('city', 40);
            $table->string('country', 60);
            $table->string('previous_club', 40);
            $table->text('about_me');
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
        Schema::dropIfExists('profiles');
    }
}
