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
	    $table->string('strainname');
	    $table->string('species');
	    $table->string('enteredby');
	    $table->string('mat');
	    $table->string('usedoften');
	    $table->string('bkgnd');
	    $table->string('repandmarkers');
	    $table->string('auxotrophies');
	    $table->string('xtransform');
	    $table->string('source');
	    $table->string('comments');
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
