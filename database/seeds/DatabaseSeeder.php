<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    // seed sellers
    // 1
    DB::table('sellers')->insert([
      'id' => 1,
      'type' => "seller",
      'name' => "Darryl Dixon",
      "phone" => 1234567890,
      "email" => "contact@isellstuff.com",
      "website" => "isellstuff.com"
    ]);
    // 2
    DB::table('sellers')->insert([
      'id' => 2,
      'type' => "seller",
      'name' => "Darrell Dickson",
      "phone" => 1987654321,
      "email" => "contact@stuffisell.com",
      "website" => "stuffisell.com"
    ]);
    // seed seller addresses
    DB::table('addresses')->insert([
      'seller_id' => 1,
      'street' => "123 Vacant st.",
      'apt' => NULL,
      'city' => "Newport News",
      'state' => "Virginia",
      'zip' => 12345
    ]);
    DB::table('addresses')->insert([
      'seller_id' => 2,
      'street' => "321 Nada ln.",
      'apt' => NULL,
      'city' => "Chesapeake",
      'state' => "Virginia",
      'zip' => 54321
    ]);
    // seed inventory
    for ($ind=1; $ind <= 5; $ind++) {
      DB::table('inventory')->insert([
        'seller_id' => 1,
        'year' => (2018 + rand(0,3)),
        'make' => "ABC",
        'model' => 100 + $ind,
        'description' => "Some description of this thing",
        'price' => (1000 * rand(1, 5))
      ]);
    }
    for ($ind=1; $ind <= 5; $ind++) {
      DB::table('inventory')->insert([
        'seller_id' => 2,
        'year' => (2018 + rand(0,3)),
        'make' => "DEF",
        'model' => 100 + $ind,
        'description' => "Some description of this thing",
        'price' => (1000 * rand(1, 5))
      ]);
    }
    // seed media
    for ($ind=1; $ind <= 10; $ind++) {
      DB::table('media')->insert([
        'inventory_item_id' => $ind,
        'media_type' => "image",
        'url' => "/media/piodKXo4T.gif"
      ]);
    }
    // seed metadata
    for ($ind=1; $ind <= 10; $ind++) {
      DB::table('metadata')->insert([
        'inventory_item_id' => $ind,
        'weight_value' => (100 * rand(1, 10)),
        'weight_unit' => "lbs",
        'dimensions_width_value' => (100 * rand(1, 10)),
        'dimensions_width_unit' => "ft",
        'dimensions_length_value' => (100 * rand(1, 10)),
        'dimensions_length_unit' => "ft",
        'dimensions_height_value' => (100 * rand(1, 10)),
        'dimensions_height_unit' => "ft",
        'color' => "red"
      ]);
    }
    // seed reviews
    for ($ind=1; $ind <= 5; $ind++) {
      DB::table('reviews')->insert([
        'seller_id' => 1,
        'from' => "Dude Bro" . $ind,
        'title' => "It's good",
        'inventory_item_id' => $ind,
        'body' => "So, yeah... it's good"
      ]);
    }
    for ($ind=1; $ind <= 5; $ind++) {
      DB::table('reviews')->insert([
        'seller_id' => 2,
        'from' => "Mr. Man" . $ind,
        'title' => "Excellent quality",
        'inventory_item_id' => $ind,
        'body' => "A well made, high quality item"
      ]);
    }
  }
}
