@extends('layouts.admin')

@section('content')
              
<div class="row">
    <div class="col-md-12">
        {{-- tot hier, hetzelfde als bij dashboard.blade.php --}}

    <div class="card">
        <div class="card-header">
            <h3>Add category
                <a href="{{ url('admin/category') }}" class="btn btn-primary text-white float-end"> Back

                </a>
            </h3>
        </div>
    </div>
    <div class="card">
        </div>
    </div>
    <div class="card-body">

        <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                    @error('name')
                       <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb3">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="" class="form-control" rows="3"> </textarea>
                             
                    @error('description')
                       <small class="text-danger">{{$message}}</small>
                    @enderror    
                </div>

                <div class="col-md-6 mb3">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="" class="form-control">
                             
                    @error('image')
                       <small class="text-danger">{{$message}}</small>
                    @enderror    
                </div>

                <div class="col-md-6 mb3">
                    <label for="status">Status</label> <br/> 
                    <input type="checkbox" name="status" id="" >
                                
                </div>

                <div class="col-md-12 mb3">
                    <label for="meta_title">Meta_title</label>
                    <input type="text" name="meta_title" id="" class="form-control">
                             
                    @error('meta_title')
                       <small class="text-danger">{{$message}}</small>
                    @enderror    
                </div>

                <div class="col-md-12 mb3">
                    <label for="meta_keyword">Meta_keyword</label>
                    <textarea type="text" name="meta_keyword" id="" class="form-control" rows="3"></textarea>
                             
                    @error('meta_keyword')
                       <small class="text-danger">{{$message}}</small>
                    @enderror    
                </div>
                <div class="col-md-12 mb3">
                    <label for="meta_description">Meta_description</label>
                    <textarea type="text" name="meta_description" id="" class="form-control" rows="3"> </textarea>
                             
                    @error('meta_description')
                       <small class="text-danger">{{$message}}</small>
                    @enderror    
                </div>  
                <div class="col-md-12 mb3">
                    <button type="submit" class="btn btn-primary float-end">Save</button>
                </div>
            </div>

        </form>
    </div>
    <div class="card"></div>

    </div>
</div>

@endsection