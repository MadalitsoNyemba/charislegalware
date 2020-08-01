<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_billing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->string('activity_name');
            $table->integer('duration');
            $table->float('VAT');
            $table->float('levy');
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
        Schema::dropIfExists('tbl_billing');
    }
}
