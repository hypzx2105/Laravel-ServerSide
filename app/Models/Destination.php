<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'image_path', 'latitude', 'longitude'];

    // Automatically generate a slug when saving a destination
    public static function boot()
    {
        parent::boot();

        static::creating(function ($destination) {
            $destination->slug = Str::slug($destination->title);
        });
    }

    // Find by slug instead of ID
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
