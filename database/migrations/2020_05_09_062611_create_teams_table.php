<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger("user_id");
            $table->string("name");
            $table->integer("count");
            $table->string("member1");
            $table->string("member2");
            $table->string("member3");
            $table->string("member4")->nullable();
            $table->integer("uma14");
            $table->integer("uma23")->nullable();
            $table->integer("tobi");
            $table->integer("points");
            $table->integer("returns");
            $table->integer("rate");
            $table->integer("visible")->default(1);
            $table->timestamps();
            $table->softDeletes();	
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
