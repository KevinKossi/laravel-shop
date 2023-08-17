@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($articles as $article)
    <div class="row mt-2">
        <div class="col-8 m-auto">
        <div class="card p-3 mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }} </h5>
                    <p class="card-text">
                    @php
                     $text = explode('\n' , $article->content );
                    @endphp
                      {{ $text[0] . "..." }}
                    </p>
                    <a href="{{ route('articles.show', $article) }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection