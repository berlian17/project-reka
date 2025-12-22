<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaTag extends Model
{
    protected $table = 'media_tags';

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
