@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Users List</h3>

            @if(count($users))
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->rol }}</td>
                            <td>
                                @if($user->rol == 'jefe' && $user->id == 1)
                                    <a href="/users/edit/{{ $user->id }}" style="font-size:25px; color:blue;"><i class="fas fa-user-edit"></i></a>
                                @elseif($user->rol == 'empleado' || $user->rol == 'jefe')
                                <a href="/users/edit/{{ $user->id }}" style="font-size:25px; color:blue;"><i class="fas fa-user-edit"></i></a>
                                <a href="/users/destroy/{{ $user->id }}" style="font-size:25px; color:red;"><i class="fas fa-user-minus"></i></a>
                                @endif
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            @else
                <p>No Users Found</p>
            @endif

        </div>
    </div>
</div>

@endsection