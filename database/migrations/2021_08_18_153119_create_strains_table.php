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
	    $table->date('sdateentered');
	    $table->string('strainname');
	    $table->string('sspecies');
	    $table->string('senteredby');
	    $table->string('smat');
	    $table->string('susedoften');
	    $table->string('sbkgnd');
	    $table->string('srepandmarkers');
	    $table->string('sauxotrophies');
	    $table->string('sxtransform');
	    $table->string('ssource');
	    $table->string('scomments');
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
