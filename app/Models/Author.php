<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

        /**
     * Get the items for the coments.
     */
    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }


    public function allAuthors(){
            $authors = Author::all();
            return($authors);

    }
}
