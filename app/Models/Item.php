<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function allItems(){
            $items = Item::all();
            return($items);

    }

    /**
     * Get the material that owns the item.
     */
    public function material()
    {
        return $this->belongsTo('App\Models\Material');
    }

    /**
     * Get the author that owns the item.
     */
    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }

    /**
     * Get the store that owns the item.
     */
    public function store()
    {
        return $this->belongsTo('App\Models\Store');
    }

    /**
     * Get the kind that owns the item.
     */
    public function kind()
    {
        return $this->belongsTo('App\Models\Kind');
    }

    /**
     * Get the category that owns the item.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Get the category that owns the item.
     */
    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}