<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = "categories";
    protected $fillable = ["name"];

<<<<<<< HEAD
    public function Products(){
        return $this->hasMany(Product::class);
    }
=======
//    public function Products(){
//        return $this->hasMany(Product::class);
//    }
>>>>>>> up
}
