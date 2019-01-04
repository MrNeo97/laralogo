@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mb-3">

        <div class="col-8">
            <div class="card">
                <div class="card-header text-center"><h3>Users</h3></div>
            </div>
        </div>

    </div>


    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <a href="/users/create" class="btn btn-default" style="font-size:25px">
                    Create User
                    <i class="fas fa-user-plus" style="color: blue"></i>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <a href="/users/list" class="btn btn-default" style="font-size:25px; color: grey;">
                    User List
                    <i class="fas fa-users" style="color: black"></i>
                </a>
            </div>
        </div>
    </div>

@endsection