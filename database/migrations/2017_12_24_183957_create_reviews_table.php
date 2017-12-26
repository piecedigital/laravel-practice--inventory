<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('reviews', function (Blueprint $table) {
      $table->increments('id');
      $table->bigInteger('seller_id');
      $table->string('from');
      $table->string('title');
      $table->bigInteger('inventory_item_id');
      $table->string('body');
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
    Schema::dropIfExists('reviews');
  }
}
