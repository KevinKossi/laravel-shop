@extends('layouts.admin')

@section('content')

    <a class="btn btn-primary mb-2" href="{{ route('admin.products.create') }}"> Create a new product </a>
    @foreach ($products as $product)
        <div class="d-flex flex-row justify-content-start align-items-start w-100">

            <img id="img" class="mr-5" src="{{ $product->img_url }}"  alt="product photo"
                style="height:150px;width:150px;">

            <div class="d-flex flex-row justify-content-between mt-5 w-50">
                <p> {{ $product->id }} </p>
                <p> {{ $product->product_name }} </p>
                <p> {{ $product->brand }} </p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Description
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Description</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ $product->description }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning"> Edit </a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a onclick="this.closest('form').submit();return false;" class="btn btn-danger"> Delete </a>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <div class="mt-3">
        {{ $products->appends(request()->input())->links() }}
    </div>
@endsection


