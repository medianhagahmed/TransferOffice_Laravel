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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('send_offices')->constrained('offices','id')->cascadeOnDelete();
            $table->foreignId('receive_offices')->constrained('offices','id')->cascadeOnDelete();
            $table->double('amount');
            $table->string('date');
            $table->string('receive_name');
            $table->string('send_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
};
