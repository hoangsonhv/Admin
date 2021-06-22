<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
//        $products = Products::all();
        return view("product.product_list",[
//            "products"=>$products
        ]);
    }
}
