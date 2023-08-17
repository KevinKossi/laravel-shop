@extends('layouts.app')
@section('content')
<div>
    <livewire:admin.faq.index />
</div>
@endsection

@section('style')
    <style>
        #content {
            width: 80% !important;
        }

    </style>

@endsection
