<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('backend.category.index');
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:40 | min:2'
        ]);

        $category = new Category;
        $category->name =  $request->name;
        $category->save();

        return redirect()->back()->with('msg','Category Added Successfull!');
    }
}
