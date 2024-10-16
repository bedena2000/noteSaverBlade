<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'isFavorite',
        'isTrash',
        'isArchived'
    ];

    public function user() {
        return $this->belongsTo(User::class);    
    }

    public function scopeFavorites($query) {
        return $query->where('isFavorite', true);
    }

    public function scopeInTrash($query)
    {
        return $query->where('isTrash', true);
    }

    public function scopeArchived($query)
    {
        return $query->where('isArchived', true);
    }
}
