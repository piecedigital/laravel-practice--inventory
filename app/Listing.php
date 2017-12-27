<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  protected $table = "inventory";

  public function scopeJoinMissing($query) {
    return $query->join("media", "inventory.id", "=", "media.inventory_item_id");
  }
}
