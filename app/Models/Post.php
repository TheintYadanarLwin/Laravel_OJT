<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'category',
        'created_at',
        'updated_at',
        'deleted_at',
        'image'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
