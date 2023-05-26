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
        Schema::create('resends', function (Blueprint $table) {
          $table->date('created')->default(DB::raw('CURRENT_TIMESTAMP'));
          $table->string('notes');
          $table->integer('dor');
          $table->integer('reason_id');
          $table->integer('user_id');
          $table->integer('room_id');
          $table->integer('packer_id');
          $table->integer('picker_id');
          $table->integer('option_id');
          $table->integer('order_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resends');
    }
};
