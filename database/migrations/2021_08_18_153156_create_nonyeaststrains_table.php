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
	    $table->('straintype');
	    $table->('strainname');
	    $table->('strainnum');
	    $table->('genus');
	    $table->('species');
	    $table->('date');
	    $table->('enteredby');
	    $table->('pdescription');
	    $table->('source');
	    $table->('medofisolation');
	    $table->('medforgrowth');
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
