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
        Schema::create('widthraw_limits', function (Blueprint $table) {
            $table->id();
            $table->integer('widthraw_min');
            $table->integer('widthraw_max');
            $table->integer('referal_bouns');
            $table->string('limit')->default(0);
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
        Schema::dropIfExists('widthraw_limits');
    }
};
