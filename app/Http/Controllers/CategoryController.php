<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Category;
use App\Models\Product;
>>>>>>> up
use Illuminate\Http\Request;

class CategoryController extends Controller
{
<<<<<<< HEAD
    //
=======
    public function list(){
        $categories = Category::all();
        return view("category.category_list",[
            "categories"=>$categories
        ]);
    }
    public function add(){
        return view("category.category_add");
    }

    public function save(Request $request){
        $n = $request->get("name");
        Category::create([
            "name"=>$n
        ]);
        return redirect()->to("categories");
    }

    public function edit($id){
        $cat = Category::findOrFail($id);
        return view("category.category_edit",[
            "cat"=>$cat

        ]);
    }

    public function update(Request $request,$id){
        $cat = Category::findOrFail($id);
        $cat->update([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("categories");
    }

    public function destroy($id){
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->to("categories");
    }
>>>>>>> up
}
