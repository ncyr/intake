<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanysController extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('phone');
                $table->string('addr1');
                $table->string('addr2')->nullable();;
                $table->string('city');
                $table->string('state');
                $table->string('zipcode');
                $table->string('website')->nullable();
                $table->unsignedInteger('owner_id');
                // $table->integer('owner_id')->unsigned()->index();
                // $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
                #unique fields
                $table->unique('owner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companys');
    }
}
