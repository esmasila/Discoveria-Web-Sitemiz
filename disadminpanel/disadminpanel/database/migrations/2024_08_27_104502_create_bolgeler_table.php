<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolgelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolgeler', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('bolge_adi');
            $table->boolean('durum')->default(false);
            $table->string('konum_bilgileri')->nullable();
            $table->text('aciklama')->nullable();
            $table->string('kapak_resmi')->nullable();
            $table->timestamps();


            $table->foreign('parent_id')->references('id')->on('bolgeler')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bolgeler');
    }
}
