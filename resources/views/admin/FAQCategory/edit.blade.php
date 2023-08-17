@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Change FAQCategory</div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.FAQCategories.update', $FAQCategory) }}">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="category_name" class="col-md-4 col-form-label text-md-right"> Name </label>

                        <div class="col-md-6">
                            <input id="category_name" type="text" class="form-control" name="category_name"
                                value="{{ $FAQCategory->category_name }}" >

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Change FAQCategory
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection