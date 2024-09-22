<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMekanlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mekanlar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bolge_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('mekan_adi');
            $table->time('acilis_saati')->nullable();
            $table->time('kapanis_saati')->nullable();
            $table->text('aciklama')->nullable();
            $table->string('kapak_resmi')->nullable();
            $table->json('resimler')->nullable();
            $table->integer('yas_siniri')->nullable();
            $table->decimal('ucret', 8, 2)->nullable();
            $table->timestamps();


            $table->foreign('bolge_id')->references('id')->on('bolgeler')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategoriler')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mekanlar');
    }
}
