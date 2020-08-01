<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsOfMalawiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_laws_of_malawi', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');

            $table->string('act');
            $table->integer('chapter');
            $table->integer('volume');
            $table->string('document_name');
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
        Schema::dropIfExists('tbl_laws_of_malawi');
    }
}
