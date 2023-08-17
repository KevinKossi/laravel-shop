@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Change the frequently asked question </div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.FAQ.update', $FAQ) }}" id="edit">
                    @csrf
                    @method('put')

                    <div class="form-group row">
                        <label for="question_name" class="col-md-4 col-form-label text-md-right"> Question name </label>

                        <div class="col-md-6">
                            <input id="question_name" type="text" class="form-control" name="question_name"
                                value="{{ $FAQ->question_name }}">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="question_answer" class="col-md-4 col-form-label text-md-right">question_answer</label>
                        <div class="col-md-6">
                            <textarea id="question_answer"  class="w-100 h-100" form="edit" name="question_answer" >
                                        @php 
                                            $text = explode('\n', $FAQ->question_answer);
                                        @endphp
                                        @foreach ($text as $line)
                                            {{ trim($line) }} 
                                        @endforeach
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Change frequently asked question
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

