<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'text',
        'image',
        'like',
        'dislike',
        'view',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }
}
