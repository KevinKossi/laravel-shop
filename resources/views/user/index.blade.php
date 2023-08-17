@extends('layouts.admin')


@section('content')

    <a class="btn btn-primary mb-2" href="{{ route('admin.users.create') }}"> Create a new user </a>
    @foreach ($users as $user)
        <div class="d-flex flex-row justify-content-between">
            <p> {{ $user->id }} </p>
            <p> {{ $user->name }} </p>
            <p> {{ $user->email }} </p>
            <p> {{ $user->birthdate }} </p>
            <p> {{ $user->gender }} </p>
            <div class="d-flex flex-row">
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning"> Edit </a>
                <form action={{ route('admin.users.destroy',$user) }} method="POST">
                    @csrf
                    @method('delete')
                <a onclick="this.closest('form').submit();return false;" class="btn btn-danger"> Delete </a>
                </form>
            </div>
        </div>

    @endforeach


@endsection
