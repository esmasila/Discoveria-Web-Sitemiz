<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIletisimBilgileriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iletisim_bilgileri', function (Blueprint $table) {
            $table->id();
            $table->string('adres')->nullable();
            $table->string('telefon1')->nullable();
            $table->string('telefon2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('destek')->nullable();
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
        Schema::dropIfExists('iletisim_bilgileri');
    }
}
