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
	    $table->string('pdname');
	    $table->string('penteredby');
	    $table->string('psequence');
	    $table->string('pusage');
	    $table->string('psource');
	    $table->string('pconcentration');
	    $table->string('pmarkers');
	    $table->string('plasmidsize');
	    $table->binary('plasmidfile');
	    $table->binary('plasmidimage');
	    $table->date('pdatemade');
	    $table->string('pcomments');
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
