<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sellers', function (Blueprint $table) {
      $table->increments('id');
      $table->string('type');
      $table->string('name');
      // address
      $table->bigInteger("phone");
      $table->string("email");
      $table->string("website");
      $table->timestamp("created_at")->useCurrent();
      $table->timestamp("updated_at")->default(DB::raw("CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"));
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('dealers');
  }
}
