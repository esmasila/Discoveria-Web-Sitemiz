<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;




class AddFieldsToMekanlarTable extends Migration
{
    public function up()
    {
        Schema::table('mekanlar', function (Blueprint $table) {

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('konum')->nullable();
            $table->integer('oy_verme')->default(0);


        });
    }

    public function down()
    {
        Schema::table('mekanlar', function (Blueprint $table) {

            $table->dropColumn('parent_id');
            $table->dropColumn('konum');
            $table->dropColumn('oy_verme');

        });
    }
}
