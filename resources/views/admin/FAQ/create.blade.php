@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create a frequently asked question</div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.FAQ.store') }}" id="create">
                    @csrf

                    <div class="form-group row">
                        <label for="question_name" class="col-md-4 col-form-label text-md-right">Question name </label>

                        <div class="col-md-6">
                            <input id="question_name" type="text" class="form-control" name="question_name" value="{{ old('question_name')  }}">

                            @error('question_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="question_answer" class="col-md-4 col-form-label text-md-right">Question answer</label>
                        <div class="col-md-6">
                            <textarea class="w-100" form="create" name="question_answer" > {{ old('question_answer') }}</textarea>

                            @error('question_answer')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="categorie" class="col-md-4 col-form-label text-md-right">Product Categorie</label>
                        <div class="col-md-6">
                            <select class="w-100 h-100" form="create" name="categorie">
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }}> {{ $category->category_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Create frequently asked question
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
