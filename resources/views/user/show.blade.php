@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex flex-row">
            <div class="col-lg-4 order-lg-1 text-center">
                @if ($user->img_path == null)
                    <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                @else
                    <img src="{{ asset('storage' . '/' . $user->img_path) }}" alt="avatar" style="width:200px;height:200px;">
                @endif
                @if (Auth::user() == $user)
                    <h6 class="mt-2">Upload a different photo</h6>
                @endif
            </div>
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                    @if (Auth::user() == $user)
                        <li class="nav-item">
                            <a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit"
                                aria-selected="false">Edit</a>
                        </li>
                    @endif
                </ul>
                <div class="tab-content py-4" id="myTabContent">
                    <div class="tab-pane fade show active mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h6> <strong> Name: </strong> {{ $user->name }}</h6>
                        <h6 cl> <strong> Gender: </strong>{{ $user->gender }}</h6>
                        <h6> <strong> Email: </strong> {{ $user->email }}</h6>
                        <h6> <strong> BirthDate: </strong> {{ $user->birthdate }}</h6>
                    </div>
                    @if (Auth::user() == $user)
                        <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                            <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id" value={{ $user->id }}>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"> Name </label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="name" type="text" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"> Gender </label>
                                    <div class="col-lg-9" id="gender">
                                        <div class="form-check form-check-inline mt-2">
                                            <label class="form-check-label" for="male"> Male: </label>
                                            <input type="radio" name="gender" class="ml-2" value="male" @if ($user->gender == 'male') checked @endif>
                                        </div>
                                        <div class="form-check form-check-inline mt-2">
                                            <label class="form-check-label" for="male"> Female: </label>
                                            <input type="radio" name="gender" class="ml-2" value="female" @if ($user->gender == 'female') checked @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" name="password" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">BirthDate</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="date" name="birthdate"
                                            value="{{ $user->birthdate }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Upload an image</label>
                                    <div class="col-lg-9">
                                        <div class="custom-file">
                                            <input type="file" name="img" id="customFile">
                                            <label class="custom-file-label " for="customFile" id="filelabel">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Cancel">
                                        <input type="submit" class="btn btn-primary" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
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
