<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileColsToPlasmidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plasmids', function (Blueprint $table) {
            $table->string('dna_filename')->nullable();
            $table->string('dna_filepath')->nullable();
            $table->string('img_filename')->nullable();
            $table->string('img_filepath')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plasmids', function (Blueprint $table) {
            $table->dropColumn('dna_filename');
            $table->dropColumn('dna_filepath');
            $table->dropColumn('img_filename');
            $table->dropColumn('img_filepath');

        });
    }
}
