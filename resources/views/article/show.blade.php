@extends('layouts.app')


@section('content')
    <div class="container ">
        <div class="row col-8 m-auto bg-slate-200">
            <div class="col-lg-8">
                <h1 class="mt-4">{{ $article->title }} </h1>
                <img class="img-fluid rounded" src="{{ $article->img_url }}" style="width:500px" style="height:500px"
                    style="margin-top:20px;">
                <div style="margin-top:20px" >
                    @php
                    $paragraphs = explode( '\n', $article->content);
                    @endphp
                    @foreach ($paragraphs as $paragraph)
                        <p class="lead"> {{ $paragraph }} </p>
                        <br>

                    @endforeach
                </div>
                <div class="published-date">
                   <h6 class="m-auto bg-slate-200">date published: {{$article->created_at}}</h6> 
                </div>
            </div>
        </div>
        <a class="btn btn-primary hBack" href="{{ route('articles.index') }}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg> View all articles </a>
    </div>
@endsection
