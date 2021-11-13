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
	    $table->string('nystraintype');
	    $table->string('nystrainname');
	    $table->string('nygenus');
	    $table->string('nyspecies');
	    $table->string('nydate');
	    $table->string('nyenteredby');
	    $table->string('nycomments');
	    $table->string('nysource');
	    $table->string('nymedofisolation');
	    $table->string('nymedforgrowth');
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
