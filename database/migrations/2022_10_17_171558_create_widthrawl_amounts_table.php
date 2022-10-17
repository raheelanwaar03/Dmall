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
        Schema::create('widthrawl_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('widthrawal_Amount');
            $table->string('widthrawal_bank');
            $table->string('user_id');
            $table->string('status')->default('pending');
            $table->string('widthrawal_bank_Account');
            $table->string('user_bank_Name');
            $table->string('widthrawal_Pho_Nubmer');
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
        Schema::dropIfExists('widthrawl_amounts');
    }
};
