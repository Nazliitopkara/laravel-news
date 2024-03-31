<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Bir haberin bir kategoriye ait olduğunu belirtmek için hasOne ilişkisini kullanırız
    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

