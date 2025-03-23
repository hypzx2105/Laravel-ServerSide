<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Specify table name if different from the default ('posts')
    protected $table = 'posts';

    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
        'google_maps_url'
    ];
    

    /**
     * Get the full URL of the image.
     */
    public function getImageUrlAttribute()
    {
        return $this->image_path ? asset('images/' . $this->image_path) : asset('images/default.jpg');
    }
}
