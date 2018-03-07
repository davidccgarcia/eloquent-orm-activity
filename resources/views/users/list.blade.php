@extends('layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Users</div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Biography</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="text-justify">
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender = $user->gender == 'f' ? 'Female' : 'Male' }}</td>
                    <td>{{ substr($user->biography, 0, 30) }}...</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection