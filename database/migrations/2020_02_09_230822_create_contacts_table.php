<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('cell_phone')->nullable();;
            $table->string('email')->nullable();
            $table->string('type'); //corporate or not
            $table->integer('owner_id')->unsigned()->index(); //no store id set = corporate/company contact
            $table->foreign('owner_id')->references('id')->on('user')->onDelete('cascade');
            $table->timestamps();
            #unique fields
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
