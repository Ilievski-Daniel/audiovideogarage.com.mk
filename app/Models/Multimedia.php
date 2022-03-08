<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;
    protected $table = 'multimedias';

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
