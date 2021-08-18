<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strains', function (Blueprint $table) {
	    $table->id();
	    $table->text('strainnumber');
	    $table->date('dateentered');
	    $table->('strainname');
	    $table->('species');
	    $table->('enteredby');
	    $table->('mat');
	    $table->('usedoften');
	    $table->('bkgnd');
	    $table->('repandmarkers');
	    $table->('auxotrophies');
	    $table->('xtransform');
	    $table->('source');
	    $table->('comments');
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
        Schema::dropIfExists('strains');
    }
}
