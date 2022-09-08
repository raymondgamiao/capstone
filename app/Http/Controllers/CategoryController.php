<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        return view(
            'admin.categories',
            [
                'categories' => Category::all(),
                'title' => 'Categories'
            ]
        );
    }

    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required', Rule::unique('category', 'name')],
                'description' => 'required'
            ]
        );

        Category::create([
            'name' =>  $formFields['name'],
            'description' =>  $formFields['description']
        ]);

        return redirect()->route('admin/categories')->with('success', 'Category created succesfully');
    }
}
