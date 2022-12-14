<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminis', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('apellido');
          $table->string('email');
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->rememberToken();
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
        Schema::dropIfExists('adminis');
    }
}
