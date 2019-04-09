<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function artwork()
    {
        return $this->belongsToMany(Artwork::class, 'artwork_tag', 'artwork_id');
    }
}
