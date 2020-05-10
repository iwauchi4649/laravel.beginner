<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger("team_id");
            $table->integer("member1");
            $table->integer("member2");
            $table->integer("member3");
            $table->integer("member4")->nullable();
            $table->integer("tobi1");
            $table->integer("tobi2");
            $table->integer("tobi3");
            $table->integer("tobi4")->nullable();
            $table->integer("rank1");
            $table->integer("rank2");
            $table->integer("rank3");
            $table->integer("rank4")->nullable();
            $table->integer("point1");
            $table->integer("point2");
            $table->integer("point3");
            $table->integer("point4")->nullable();
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
        Schema::dropIfExists('records');
    }
}
