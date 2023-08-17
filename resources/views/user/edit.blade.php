@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Change user</div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.update', $user) }}">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $user->name }}">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ $user->email }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" >

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right"> Gender </label>

                        <div class="col-md-6" id="gender">
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label"> Male: </label>
                                <input type="radio" name="gender" class="ml-2" value="male" @if ($user->gender == 'male') checked @endif>
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label"> Female: </label>
                                <input type="radio" name="gender" class="ml-2" value="female" @if ($user->gender == 'female') checked @endif>
                            </div>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="isAdmin" class="col-md-4 col-form-label text-md-right"> isAdmin </label>

                        <div class="col-md-6" id="isAdmin">
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label"> Yes </label>
                                <input type="radio" name="isAdmin" class="ml-2" value="true" @if ($user->isAdmin == true) checked @endif>
                            </div>
                            <div class="form-check form-check-inline mt-2">
                                <label class="form-check-label"> No </label>
                                <input type="radio" name="isAdmin" class="ml-2" value="false">
                            </div>

                            @error('isAdmin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthdate" class="col-md-4 col-form-label text-md-right"> Birthdate </label>

                        <div class="col-md-6">
                            <input id="birthdate" type="date" class="form-control" name="birthdate"
                                value={{ $user->birthdate }}>

                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Change User
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
