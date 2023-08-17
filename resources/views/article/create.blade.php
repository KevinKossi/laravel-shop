@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create an article</div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data" id="create">
                    @csrf

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">Title </label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="content" class="col-md-4 col-form-label text-md-right">Article content</label>
                        <div class="col-md-6">
                            <textarea class="w-100 h-100" form="create" name="content">

                                </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="img" class="col-md-4 col-form-label text-md-right">Article image</label>

                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" name="img" id="customFile">
                                <label class="custom-file-label " for="customFile" id="filelabel">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Create Article
                            </button>
                        </div>
                    </div>
                </form>
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
