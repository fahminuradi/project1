<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mapel1',100);
            $table->string('mapel2',100);
            $table->string('mapel3',100);
            $table->string('mapel4',100);
            $table->string('mapel5',100);
            $table->string('guru1',50);
            $table->string('guru2',50);
            $table->string('guru3',50);
            $table->string('guru4',50);
            $table->string('guru5',50);
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
        Schema::dropIfExists('jadwals');
    }
}
