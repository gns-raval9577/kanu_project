<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGalleryImage extends Model
{
    use HasFactory;

    protected $table = 'projectgallery_images';

    protected $fillable = [
        'projectgallery_id',
        'image',
    ];

    public function projectGallery()
    {
        return $this->belongsTo(ProjectGallery::class);
    }

    public function project()
    {
        return $this->belongsTo(ProjectGallery::class, 'projectgallery_id');
    }
}
