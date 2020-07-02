<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->foreign('company_id')->references('id')->on('companys')->onDelete('cascade');
            $table->integer('store_id');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->integer('user_role');
            $table->foreign('user_role')->references('id')->on('userroles')->onDelete('cascade');
            $table->string('access_level');
            $table->boolean('is_create_pos_user')->nullable();;
            $table->string('pos_user');
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
        Schema::dropIfExists('company_stores');
    }
}
