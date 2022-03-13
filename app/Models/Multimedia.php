<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Multimedia extends Model
{
    public $fillable = ['image'];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $table = 'multimedias';

    use HasFactory;
}
