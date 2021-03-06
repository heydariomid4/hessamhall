<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','categorie_id','show','path'
    ];

    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }
}
