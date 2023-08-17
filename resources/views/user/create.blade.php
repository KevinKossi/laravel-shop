@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create a user</div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.store')}}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name </label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control"
                                name="name"  >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email </label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control"
                                name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control" name="password" >
                        </div>
                    </div>

                
                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right"> Gender </label>

                        <div class="col-md-6" id="gender">
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label" > Male: </label>
                                <input type="radio" name="gender" class="ml-2" value="male">
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label" > Female: </label>
                                <input type="radio" name="gender" class="ml-2" value="female">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="isAdmin" class="col-md-4 col-form-label text-md-right"> isAdmin </label>

                        <div class="col-md-6" id="isAdmin">
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label" > Yes </label>
                                <input type="radio" name="isAdmin" class="ml-2" value="true" >
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label" > No </label>
                                <input type="radio" name="isAdmin" class="ml-2" value="false">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthdate" class="col-md-4 col-form-label text-md-right"> BirthDate </label>

                        <div class="col-md-6">
                            <input id="birthdate" type="date" class="form-control" name="birthdate">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Create User
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
