@extends('layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{ $title }}</div>

        @include('users.partials.list')
    </div>
@endsection