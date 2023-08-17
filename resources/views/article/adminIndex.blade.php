@extends('layouts.admin')

@section('content')

    <a class="btn btn-primary mb-2" href="{{ route('admin.articles.create') }}"> Create a new article </a>
    @foreach ($articles as $article)
        <div class="d-flex flex-row justify-content-start align-items-start w-100">

            <img id="img" class="mr-5" src="{{ $article->img_url }}" alt="article photo" style="height:150px;width:150px;">

            <div class="d-flex flex-row justify-content-between mt-5 w-50">
                <p> {{ $article->id }} </p>
                <p> Published at {{ $article->created_at }} </p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{ "#" . "modal". $article->id }}">
                    Content
                </button>

                <!-- Modal -->
                <div class="modal fade" id="{{ "modal" . $article->id  }}" tabindex="-1" role="dialog"
                    aria-labelledby="{{ '#' . "modal" . $article->title }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="{{ "modal" . $article->title }}"> {{ $article->title }} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ $article->content }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <a href="{{ route('admin.articles.edit',$article) }}" class="btn btn-warning"> Edit </a>
                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a onclick="this.closest('form').submit();return false;" class="btn btn-danger"> Delete </a>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection
