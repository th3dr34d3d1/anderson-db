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
	    $table->('oligonum');
	    $table->('datemade');
	    $table->('designedby');
	    $table->('madeby');
	    $table->('sequence');
	    $table->('pdescription');
	    $table->('hybridtm');
	    $table->('lengthbases');
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
