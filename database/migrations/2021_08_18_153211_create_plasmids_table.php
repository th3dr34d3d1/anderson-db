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
	    $table->string('plasmidname');
	    $table->string('detailedname');
	    $table->string('sequence');
	    $table->string('date');
	    $table->string('enteredby');
	    $table->string('source');
	    $table->string('concentration');
	    $table->string('markers');
	    $table->string('plasmidsize');
	    $table->string('funcoruse');
	    $table->string('pdescription');
	    $table->binary('plasmidfile');
	    $table->binary('plasmidimage');
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
