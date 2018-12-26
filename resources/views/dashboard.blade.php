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

                    Bienvenido {{ ucwords(Auth::user()->name) }}
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><a href="/create" class="btn btn-default" style="font-size:25px">
                        Create Product
                        <i class="fas fa-plus-circle" style="color: blue"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><a href="/list" class="btn btn-default" style="font-size:25px">
                        List Products
                        <i class="fas fa-list-alt" style="color: green"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
