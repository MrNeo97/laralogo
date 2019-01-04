@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mb-3">

        <div class="col-8">
            <div class="card">
                <div class="card-header text-center"><h3>Products</h3></div>
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
                    List Products
                    <i class="fas fa-list-alt" style="color: black"></i>
                </a>
            </div>
        </div>
    </div>

@endsection