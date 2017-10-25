<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
        $allCategoriesInfo= Category::all();
        return view('admin.category.manage-category',[
            'allCategoriesInfo'=>$allCategoriesInfo
        ]);
    }

    public function saveCategoryInfo(Request $request){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_discription = $request->category_discription;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/add-category')->with('message','category info save successfully');

    }
    public function editCategoryInfo($id){
        $categoryInfoById= Category::find($id);
        return view('admin.category.edit-category',[
            'categoryInfoById'=>$categoryInfoById
        ]);
    }
    public function updateCategoryInfo(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_discription = $request->category_discription;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/manage-category')->with('message','category info update successfully');

    }
    public function unpublishdeCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('/manage-category');

    }
    public function publishdeCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/manage-category');

    }
}
