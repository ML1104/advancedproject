<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = ['title', 'description', 'upvotes'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function tags()
    {
       return $this->belongsToMany(Tag::class, 'artwork_tag', 'tag_id');
    }
}
