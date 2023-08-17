@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{-- tot hier, hetzelfde als bij dashboard.blade.php --}}

            <div class="card">
                <div class="card-header">
                    <h3>Add Products
                        <a href="{{ url('admin/products') }}" class="btn btn-primary text-white float-end"> Back

                        </a>
                    </h3>
                </div>
            </div>
            <div class="card">
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/products') }}" method="post" enctype="multipart/form-data">
                @csrf
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane"
                            type="button" role="tab" aria-controls="seotag" aria-selected="false">SEO Tag</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane"
                            type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="productImage-tab" data-bs-toggle="tab" data-bs-target="#productImage-tab-pane"
                            type="button" role="tab" aria-controls="productImage" aria-selected="false">ProductImage</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab">
                        <div class="mb-3">
                            <label for="Category">Category</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>

                        </div>
                        <div class="mb3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="" class="form-control">

                        </div>
                        <div class="mb3">
                            <label for="weight">Weight (/kg)</label>
                            <input type="text" name="weight" id="" class="form-control">

                        </div>
                        <div class="mb-3">
                            <label for="Category">Meat</label>
                            <select name="meats" id="" class="form-control">
                                @foreach ($meats as $meat)
                                    <option value="{{ $meat->name }}">{{ $meat->name }}</option>
                                @endforeach

                            </select>

                        </div>
                        <div class="mb3">
                            <label for="small_description">Small_description (500)</label>
                            <textarea type="text" name="small_description" id="" class="form-control" rows="4"> </textarea>

                        </div>
                        <div class="mb4">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="" class="form-control" rows="4"> </textarea>

                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab">
                        <div class="mb3">
                            <label for="meta_title">Meta_title</label>
                            <input type="text" name="meta_title" id="" class="form-control">

                        </div>

                        <div class="mb3">
                            <label for="meta_description">Meta_description (500)</label>
                            <textarea type="text" name="meta_description" id="" class="form-control" rows="4"> </textarea>

                        </div>
                        <div class="mb3">
                            <label for="meta_keyword">Meta_keyword </label>
                            <textarea type="text" name="meta_keyword" id="" class="form-control" rows="4"> </textarea>

                        </div>

                    </div>
                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="original_price">Original Price</label>
                                <input type="text" name="original_price" id="" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="selling_price">Selling Price</label>
                                <input type="text" name="selling_price" id="" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trending">Treding </label>
                                <input type="checkbox" name="trending" id=""
                                    style="width: 50px; height: 50px;">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="status">Status </label>
                                <input type="checkbox" name="status" id="" style="width: 50px; height: 50px;">

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade border p-3 " id="productImage-tab-pane" role="tabpanel" aria-labelledby="productImage-tab" tabindex="0">
                        
                        <div class="mb-3">
                            <label >Upload product images</label>
                            <input type="file" name="productImage" id="" class="form-control" multiple>
                        </div>
                        

                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

            </form>
        </div>
        <div class="card"></div>

    </div>
    </div>
@endsection
