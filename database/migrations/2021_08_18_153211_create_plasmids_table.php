<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasmidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plasmids', function (Blueprint $table) {
	    $table->id();
	    $table->('plasmidname');
	    $table->('detailedname');
	    $table->('sequence');
	    $table->('date');
	    $table->('enteredby');
	    $table->('source');
	    $table->('concentration');
	    $table->('markers');
	    $table->('plasmidsize');
	    $table->('funcoruse');
	    $table->('pdescription');
	    $table->blob('plasmidfile');
	    $table->blob('plasmidimage');
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
        Schema::dropIfExists('plasmids');
    }
}
