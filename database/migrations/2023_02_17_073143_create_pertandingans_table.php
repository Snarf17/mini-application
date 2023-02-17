<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertandingans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klub');
            $table->string('kota_klub');
            $table->integer('ma')->default(0);
            $table->integer('me')->default(0);
            $table->integer('s')->default(0);
            $table->integer('k')->default(0);
            $table->integer('gm')->default(0);
            $table->integer('gk')->default(0);
            $table->integer('point')->default(0);
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
        Schema::dropIfExists('pertandingans');
    }
};
