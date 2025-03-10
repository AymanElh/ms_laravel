<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'category_id'];

    public function categories()
    {
        $this->belongsTo(Category::class);
    }
}
