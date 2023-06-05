<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'img_path', 'programming_language', 'overview'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
