<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonyeaststrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonyeaststrains', function (Blueprint $table) {
	    $table->id();
	    $table->string('straintype');
	    $table->string('strainname');
	    $table->string('strainnum');
	    $table->string('genus');
	    $table->string('species');
	    $table->string('date');
	    $table->string('enteredby');
	    $table->string('pdescription');
	    $table->string('source');
	    $table->string('medofisolation');
	    $table->string('medforgrowth');
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
        Schema::dropIfExists('nonyeaststrains');
    }
}
