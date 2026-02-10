<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('firstname', 32)->index();
            $table->string('lastname', 32)->index();
            $table->string('zip_code', 8)->index();
            $table->integer('pref_id')->index();
            $table->string('city', 128)->index();
            $table->string('street', 128)->index();
            $table->string('building', 128)->index();
            $table->string('tel_num', 13)->index();
            $table->string('mobile_num', 13)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
