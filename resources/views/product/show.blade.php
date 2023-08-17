@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column justify-content-between align-items-center w-100">
            <div class="d-flex justify-content-start mb-4 w-100">
                <div class="mr-4">
                    <h1> {{ $product->product_name }}</h4>
                        <h3 class="mb-2 text-muted">{{ $product->brand }}</h6>
                            <img src={{ $product->img_url }} alt={{ $product->brand }} style="width:400px"
                                style="height:400px">
                </div>

                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <div class="price text-success">
                            <h5 class="mt-4">{{ '€' . $product->price }}</h5>
                        </div>
                        <a href="#" class="btn btn-success mt-3"><i class="fas fa-shopping-cart"></i> Add to
                            Cart</a>

                        <a href="{{ route('reviews.create', $product) }}" class="lead">Did you like the product , write a
                            review ! </a>
                    </div>
                </div>
                <div class="w-100" style="margin-left:20%">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"><svg width="1em" height="1em"
                            viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg> Go Back </a>
                </div>
            </div>
            <div>
                <h3 style="text-decoration: underline"> Product Description:</h3>
                <p class="card-text">
                    @php
                    $text = explode('\n' , $product->description );
                    @endphp
                    @foreach ($text as $paragraph)
                        <p> {{ $paragraph }} </p>
                    @endforeach
                </p>
            </div>
            @if ($product->reviews)
                <div>
                    <h3 style="text-decoration: underline"> Reviews: </h3>
                    @foreach ($product->reviews as $review)
                        <div class="border border-dark mb-2">
                            <a class="ml-2 text-muted" href="{{ route('users.show', $review->user) }}"> Written by
                                {{ $review->user->name }} </a>

                            <p class="ml-2"> {{ $review->review }} </p>
                            <p class="ml-2"> Product score: {{ $review->rating }} </p>

                            @if (Auth::check())
                                @if (Auth::user()->id == $review->user->id)
                                    <a class="btn btn-warning" href="{{ route('reviews.edit',$review) }}"> Edit </a>
                                @endif

                                @if (Auth::user()->isAdmin == true)
                                    <a class="btn btn-warning" href="{{ route('reviews.edit', $review) }}"> Edit </a>
                                    <form action={{ route('reviews.destroy',$review) }} method="POST">
                                        @csrf
                                        @method('delete')
                                    <a onclick="this.closest('form').submit();return false;" class="btn btn-danger"> Delete </a>
                                    </form>
                                @endif
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
