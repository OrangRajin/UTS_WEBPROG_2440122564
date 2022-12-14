<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    public function publisher(){
        return $this->hasOne(publishers::class, 'id', 'publisherId');
    }

    public function categories(){
        return $this->belongsToMany(categories::class, 'book_category');
    }
}
