<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('domain');
            $table->string('slogan', 100)->nullable();
            $table->string('description', 300)->nullable();
            $table->string('logo', 300)->nullable();
            $table->date('dob');
            $table->string('banner', 300)->nullable();
            $table->string('kota')->nullable();
            $table->string('alamat_toko')->nullable();
            $table->string('kodepos', 10)->nullable();
            $table->boolean('status')->default(0);
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
