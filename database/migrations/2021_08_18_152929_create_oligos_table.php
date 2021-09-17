<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOligosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oligos', function (Blueprint $table) {
	    $table->id();
	    $table->integer('oligonum');
	    $table->string('oname');
	    $table->date('datemade');
	    $table->string('designedby');
	    $table->string('madeby');
	    $table->string('sequence');
	    $table->string('pdescription');
	    $table->string('hybridtm');
	    $table->string('lengthbases');
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
        Schema::dropIfExists('oligos');
    }
}
