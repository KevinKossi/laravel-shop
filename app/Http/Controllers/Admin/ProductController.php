<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Meat;
use app\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    function index() {
        return view('admin.products.index');
    }
    function store(ProductFormRequest $request) {
        $validatedData = $request->validated();
        $category = Category::findOrFail($validatedData['category_id']);
        $category->products()->create($validatedData['']);
    }
    function create() {
        $categories = Category::all();
        $meats = Meat::all();
        return view('admin.products.create', compact('categories', 'meats'));
    }
    function edit() {
        return view('admin.products.index');
    }
    function update() {
        return view('admin.products.index');
    }
}
