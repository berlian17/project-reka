<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public function galleries()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id');
    }
}
