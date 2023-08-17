<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Meat;
use app\Http\Requests\ProductFormRequest;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    function indexAdmin() {
        return view('admin.products.index');
    }
    public function index()
    {
 
            return view("product.index", ["products" => Product::simplepaginate(10), "categories" => \App\Models\Meat::all()]) ;
        
    }


}

