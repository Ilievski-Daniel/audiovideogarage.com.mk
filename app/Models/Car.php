<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $fillable = ['model_name', 'model_path', 'image'];
    
    public function multimedia(){
        return $this->hasMany(Multimedia::class);
    }

    public function category(){
        return $this->hasMany(Category::class);
    }
    use HasFactory;
}
