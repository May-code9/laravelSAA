<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrs', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('admin_id');
          $table->string('qrcode');
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrs');
    }
}
