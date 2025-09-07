<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    use HasFactory;

    protected $table = 'projectgalleries';

    protected $fillable = [
        'title',
        'main_image',
        'description',
        'status',
    ];


public function images()
{
    return $this->hasMany(ProjectGalleryImage::class, 'projectgallery_id');
}
}
