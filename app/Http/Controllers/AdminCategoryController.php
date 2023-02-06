<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()

    {
        $category = Category::all();
        return view('admin.category', [
            'title' => 'Add Category',
            'category' => $category
        ]);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create($validateData);

        return redirect('/add-category')->with('success', 'Has been added new category');
    }
}