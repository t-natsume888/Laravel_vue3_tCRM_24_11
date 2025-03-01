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
        // 追加 24_1128 , 2カラム追加
        Schema::create('inertia_tests', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // 追加
            $table->string('content'); // 追加
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
        Schema::dropIfExists('inertia_tests');
    }
};
