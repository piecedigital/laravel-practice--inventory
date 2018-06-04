<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('messages', function (Blueprint $table) {
      $table->increments('id');
      $table->bigInteger('inventory_item_id');
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email');
      $table->string('message_body');
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
    Schema::dropIfExists('message');
  }
}
