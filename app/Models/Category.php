<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function multimedia(){
        return $this->hasMany(Multimedia::class);
    }

    protected $table = 'categories';

    use HasFactory;
}
