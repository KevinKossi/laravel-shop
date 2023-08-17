@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{-- tot hier, hetzelfde als bij dashboard.blade.php --}}

            <div class="card">
                <div class="card-header">
                    <h3> Products
                        <a href="{{ url('admin/products/create') }}" class="btn btn-primary text-white float-end"> New Product

                        </a>
                    </h3>
                </div>
            </div>
            <div class="card">
            </div>
        </div>
        <div class="card-body">
        </div>
    </div>
    
        @endsection
