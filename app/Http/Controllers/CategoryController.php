<?php

namespace App\Http\Controllers;

use App\Models\logs;
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

        $category =  Category::create([
            'name' =>  $formFields['name'],
            'description' =>  $formFields['description']
        ]);

        logs::create([
            'log_id' => $category->id,
            'name' => 'New Category ' .  $formFields['name'],
            'log_type' => 'Category'
        ]);

        return redirect()->route('admin/categories')->with('success', 'Category created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $category = Category::find($request->categoryIDDelete);
        $category->delete();

        logs::create([
            'log_id' => $request->categoryIDDelete,
            'name' => 'Deleted Category ' . $category->name,
            'log_type' => 'Category'
        ]);

        return redirect()->route('admin/categories')->with('success', 'category deleted succesfully');
    }


    public function update(Request $request)
    {
        //dd($request->branchIDEdit);
        $formFields = $request->validate([
            'nameEdit' => 'required',
            'descEdit' => 'required'
        ]);

        $category = Category::find($request->categoryIDEdit);
        $category->name = $formFields['nameEdit'];
        $category->description = $formFields['descEdit'];
        $category->save();

        logs::create([
            'log_id' => $request->categoryIDEdit,
            'name' => 'Updated Category ' .  $formFields['nameEdit'],
            'log_type' => 'Category'
        ]);

        return redirect()->route('admin/categories')->with('success', 'category updated succesfully');
    }
}
