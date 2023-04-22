<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeLength($query, $length)
    {
        return $query->whereRaw('length(content)' . $length);
    }
}
