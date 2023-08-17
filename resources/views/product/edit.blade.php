@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Change Product</div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data"
                    id="edit">
                    @csrf
                    @method('put')

                    <div class="form-group row">
                        <label for="product_name" class="col-md-4 col-form-label text-md-right"> Product name </label>

                        <div class="col-md-6">
                            <input id="product_name" type="text" class="form-control" name="product_name"
                                value="{{ $product->product_name }}">

                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="brand" class="col-md-4 col-form-label text-md-right"> Brand </label>

                        <div class="col-md-6">
                            <input id="brand" type="text" class="form-control" name="brand" value="{{ $product->brand }}">

                            @error('brand')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                        <div class="col-md-6">
                            <textarea id="description" class="w-100 h-100" form="edit" name="description">
                                            @php 
                                                $text = explode('\n', $product->description);
                                            @endphp
                                            @foreach ($text as $line)
                                                {{ trim($line) }} 
                                            @endforeach
                                </textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="categorie" class="col-md-4 col-form-label text-md-right">Product Categorie</label>
                        <div class="col-md-6">
                            <select class="w-100 h-100" form="edit" name="product_category_id">
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }} @if ($product->product_category_id == $category->id) selected
                                @endif> {{ $category->name }} </option>
                                @endforeach
                            </select>

                            @error('product_category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                        <div class="col-md-6">
                            <input id="price" type="number" class="form-control" name="price" value={{ $product->price }}>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="img" class="col-md-4 col-form-label text-md-right">Product image</label>

                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" name="img" id="customFile">
                                <label class="custom-file-label " for="customFile" id="filelabel">Choose file</label>
                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Change Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // wacht tot de page is geladen
        window.addEventListener('load', (event) => {

            document.getElementById('customFile').addEventListener('change', function() {
                // krijg de filenaam , we krijgen het pad
                var fileDir = this.value;

                // split de string in een lijst aan de hand van de \ vervolgens nemen we het laatste element van de lijst
                var fileName = fileDir.split('\\')[fileDir.split('\\').length - 1];
                // vervang de  "Choose a file" label text
                document.getElementById("filelabel").innerHTML = fileName;
            });
        });

    </script>

@endsection
