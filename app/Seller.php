<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
  // protected $table = "Sellers";
  public function scopeJoinMissing($query) {
    return $query->join("addresses", "sellers.id", "=", "addresses.seller_id");
  }
}
