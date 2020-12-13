<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use session;


class CategoryController extends Controller
{
    public function category_form()
    {
    	return view('admin-interface.category.category_add_form');
    }
    public function category_save(Request $request)
    {
    	$validatedData = $request->validate([
    		'category_name' => 'required|unique:categories,category_name',
    		'category_description' => 'required',
    		'publication_status' => 'required',
    	]);

    	$category = new Category;
    	$category->category_name = $request->category_name;
    	$category->category_description = $request->category_description;
    	$category->publication_status = $request->publication_status;
    	$category->save();

    	return redirect('/category-form')->with('category_add_msg', 'Category Added Successfully');
    }
    public function manage_category()
    {
    	$categories = Category::paginate(3);
        return view('admin-interface.category.manage_category', ['categories' => $categories]);
    }
    public function category_unpublish($id)
    {
    	$category = Category::find($id);
    	$category->publication_status = 0;
    	$category->save();
  		return back()->with('unpublish_status_msg', 'Category Unpublished Successfully');
    }
    public function category_publish($id)
    {
    	$category = Category::find($id);
    	$category->publication_status = 1;
    	$category->save();
    	return back()->with('publish_status_msg', 'Category Published Successfully');
    }
    public function category_delete($id)
    {
    	$category = Category::find($id);
    	$category->delete();
    	return back()->with('category_delete_msg', 'Category Deleted Successfully');
    }
    public function category_edit($id)
    {
        $category = Category::find($id);
        return view('admin-interface.category.category_edit', ['category' => $category]);
    }
    public function category_update(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',
            'publication_status' => 'required',
        ]);

        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/manage_category')->with('category_update_msg', 'Category Updated Successfully');
    }
}
