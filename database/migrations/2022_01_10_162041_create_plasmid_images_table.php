<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasmidImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plasmid_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plasmid_id')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->constrained('plasmids');
            $table->string('filepath', 200);    
            $table->string('filename', 200);    
            $table->string('extension', 100);    
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
        Schema::dropIfExists('plasmid_images');
    }
}
