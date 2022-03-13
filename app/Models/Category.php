<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function car(){
        return $this->belongsTo(Car::class);
    }

    protected $table = 'categories';

    use HasFactory;
}
