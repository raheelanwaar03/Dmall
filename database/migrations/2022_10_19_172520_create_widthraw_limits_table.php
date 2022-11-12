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
            $table->integer('widthraw_min')->nullable();
            $table->integer('widthraw_max')->nullable();
            $table->integer('refer_limit')->nullable();
            $table->integer('referal_bouns')->nullable();
            $table->integer('commission_limit')->nullable();
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
