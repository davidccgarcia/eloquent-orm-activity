<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Biography</th>
            <th>Options</th>
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
            <td>
                {!! Form::open(['route' => ['users.delete', $user->id], 'method' => 'delete']) !!}
                    <button class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{!! $users->render() !!}