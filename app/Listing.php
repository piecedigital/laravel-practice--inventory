<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = "inventory";

    public function scopeJoinMissing($query) {
        return $query->join("media", function ($join) {
                $join->on("inventory.id", "=", "media.inventory_item_id")
                ->limit(1);
            })
            ->join("metadata", "inventory.id", "=", "metadata.inventory_item_id");
    }
}
