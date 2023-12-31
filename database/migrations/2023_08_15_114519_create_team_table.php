<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100)->nullable();
            $table->string('designation', 100)->nullable();
            $table->string('facebook_id', 100)->nullable();
            $table->string('twitter_id', 100)->nullable();
            $table->string('instagram_id', 100)->nullable();
            $table->string('linkedin_id', 100)->nullable();
            $table->string('team_img', 100)->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('teams');
    }
}
