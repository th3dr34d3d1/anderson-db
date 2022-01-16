<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plasmids', function (Blueprint $table) {
            $table->dropColumn('plasmidfile');
            $table->dropColumn('plasmidimage');
            $table->text('pcomments')->nullable()->change();
            $table->text('psequence')->nullable()->change();
        });
        Schema::table('strains', function (Blueprint $table) {
            $table->text('sxtransform')->nullable()->change();
            $table->text('scomments')->nullable()->change();
        });
        Schema::table('oligos', function (Blueprint $table) {
            $table->text('sequence')->nullable()->change();
            $table->text('odescription')->nullable()->change();
        });
        Schema::table('nonyeaststrains', function (Blueprint $table) {
            $table->text('nycomments')->nullable()->change();
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
            $table->string('plasmidfile');
            $table->string('plasmidimage');
        });
    }
}
