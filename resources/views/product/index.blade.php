@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h4 class="my-2"><strong> Categories </strong></h1>
                    <ul class="list-unstyled">
                        @foreach($categories as $category)
                        <li class="ml-4"><a class="text-dark" href="{{ route("products.index", ["category" => $category]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <img class="card-img" src={{ $product->img_url }} alt={{ $product->brand }}>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h4 class="card-title"> {{ $product->product_name }}</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->brand }}</h6>
                                    <p class="card-text">
                                        @php
                                        $text = explode('\n' , $product->description );
                                        @endphp
                                        {{ $text[0] . '...' }} <a href="{{ route('products.show', $product) }}"> more</a>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="price text-success">
                                            <h5 class="mt-4">{{ '€' . $product->price }}</h5>
                                        </div>
                                        <a href="#" class="btn btn-success mt-3"><i class="fas fa-shopping-cart"></i> Add to
                                            Cart</a>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="ml-3">
                    {{ $products->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
