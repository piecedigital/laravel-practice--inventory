<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('metadata', function (Blueprint $table) {
      $table->increments('id');

      $table->bigInteger('inventory_item_id');

      $table->bigInteger('weight_value');
      $table->string('weight_unit');

      $table->bigInteger('dimensions_width_value');
      $table->string('dimensions_width_unit');

      $table->bigInteger('dimensions_length_value');
      $table->string('dimensions_length_unit');

      $table->bigInteger('dimensions_height_value');
      $table->string('dimensions_height_unit');

      $table->string('color');

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
    Schema::dropIfExists('metadata');
  }
}
