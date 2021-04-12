<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('clientName');
            $table->timestamp('dateCreate');
            $table->string('time_taken');
            $table->longText('Description');
            $table->string('demo_clientside')->nullable();
            $table->string('demo_managerside')->nullable();
            $table->string('demo_username')->nullable();
            $table->string('demo_password')->nullable();
            $table->string('image_path')->nullable();
            $table->string('github')->nullable();

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
        Schema::dropIfExists('projects');
    }
}
