@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ ucwords(Auth::user()->name) }}

                </div>
            </div>
        </div>
    </div>

    <hr>

    @if(Auth::user()->rol == 'jefe')

    <div class="row justify-content-center mb-3">

        <div class="col-4">
            <a href="/products">
                <div class="card">
                    <div class="card-header text-center"><h3>Products</h3></div>
                </div>
            </a>
        </div>

        <div class="col-2"></div>

        <div class="col-4">
            <a href="/users">
                <div class="card">
                    <div class="card-header text-center"><h3>Users</h3></div>
                </div>
        </div>

    </div>


    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <a href="/create" class="btn btn-default" style="font-size:25px">
                    Create Product
                    <i class="fas fa-plus-circle" style="color: blue"></i>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <a href="/list" class="btn btn-default" style="font-size:25px; color: grey;">
                    Products List
                    <i class="fas fa-list-alt" style="color: black"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <a href="/users/create" class="btn btn-default" style="font-size:25px">
                    Create User
                    <i class="fas fa-user-plus" style="color:blue"></i>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <a href="/users/list" class="btn btn-default" style="font-size:25px; color: grey;">
                    Users List
                    <i class="fas fa-users" style="color:black"></i>
                </a>
            </div>
        </div>
    </div>

        @else

        <div class="row justify-content-center mb-3">

            <div class="col-8">
                <a href="/products">
                    <div class="card">
                        <div class="card-header text-center"><h3>Products</h3></div>
                    </div>
                </a>
            </div>

        </div>


        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <a href="/create" class="btn btn-default" style="font-size:25px">
                        Create Product
                        <i class="fas fa-plus-circle" style="color: blue"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="/list" class="btn btn-default" style="font-size:25px; color: grey;">
                        Products List
                        <i class="fas fa-list-alt" style="color: black"></i>
                    </a>
                </div>
            </div>

        </div>

        @endif


</div>
@endsection
