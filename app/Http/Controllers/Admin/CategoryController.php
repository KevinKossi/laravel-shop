<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Faker\Provider\File as ProviderFile;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class CategoryController extends Controller
{
    function index() {
        return view('admin.category.index') ;
    }

    function create() {
        return view('admin.category.create') ;
    }

    function store(CategoryFormRequest $request) {
        // form validation

        $validatedData = $request->validated();

        $category = new Category;
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
        
            $category->image = $filename;

        }

        $category->meta_description = $validatedData['meta_description'];
        $category->meta_title = $validatedData['meta_title'];
        $category->status = $request->status == true ? '1':'0';
        $category->save();

        
        return redirect('admin/category')->with('message', 'category Added Succesfully') ;
    }

    function update(CategoryFormRequest $request, $category) {
        // form validation


        $validatedData = $request->validated();

        $category = Category::findOrFail($category);
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        
        if ($request->hasFile('image')) {
            $path = 'uploads/category/'.$category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
        
            $category->image = $filename;

        }

        $category->meta_description = $validatedData['meta_description'];
        $category->meta_title = $validatedData['meta_title'];
        $category->status = $request->status == true ? '1':'0';
        $category->save();

        
        return redirect('admin/category')->with('message', 'category updated Succesfully') ;
    }


  public function edit(Category $category)  
  {

        
    return view('admin.category.edit', compact('category'));

    }




}
