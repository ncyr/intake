<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('addr1');
            $table->string('addr2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->integer('zipcode');
            $table->boolean('ship_address')->nullable();
            $table->string('ship_name')->nullable();
            $table->string('ship_addr1')->nullable();
            $table->string('ship_addr2')->nullable();
            $table->string('ship_city')->nullable();
            $table->string('ship_state')->nullable();
            $table->integer('ship_zip')->nullable();
            $table->unsignedInteger('company_id');
            // $table->foreign('company_id')->references('id')->on('companys')->onDelete('cascade');
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
        Schema::dropIfExists('stores');
    }
}
