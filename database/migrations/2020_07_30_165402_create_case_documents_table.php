<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_case_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('case_id')->references('id')->on('tbl_cases');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_case_documents');
    }
}
