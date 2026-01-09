<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        \RealRashid\SweetAlert\Facades\Alert::success('Success', 'Category created successfully.');
        return back();
    }
    
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        \RealRashid\SweetAlert\Facades\Alert::success('Success', 'Category deleted successfully.');
        return back();
    }
}
