<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "products";
    protected $fillable = ["name","image","description","price","qty","id_category"];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Brand(){
        return $this->belongsTo(Brand::class);
    }

    public function getImage(){
        if ($this->image){
            return asset("upload/".$this->image);
        }
        return asset("upload/default.png");
    }
}
