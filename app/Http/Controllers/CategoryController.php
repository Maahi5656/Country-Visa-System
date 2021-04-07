<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function createCategory(){
        return view('category.create');
    }

    public function insertCategory(Request $request){

        $request->validate([
            'categoryName' => 'required',
        ]);

        $category = new Category;
        $category->name = $request->categoryName;
        
        $category->save();
        return redirect()->back()->with('msg','New Category Created');
    }

    public function viewAllCategory(){
        $category = Category::all();

        return view('category.index',[
            'categories'=>$category,
        ]);
    }

    public function editCategory($id){
        
        $category = Category::find($id);
        return view('category.edit',[
            'categories' => $category,
        ]);
    }

    public function updateCategory(Request $request, $id){
        
        $category = Category::find($id);

        $request->validate([
            'categoryName'=>'required',
        ]);

        $category->update([
          'name' => $request->categoryName,
        ]);
        
        return redirect('/category')->with('msg', 'Successfully Updated');

    }

}
 