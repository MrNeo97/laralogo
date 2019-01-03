@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">

        <!-- Search form -->
        {!! Form::open(['action' => 'ProductsController@show', 'method' => 'get']) !!}

        {{ Form::label('category', 'Search for:', ['class' => 'control-label']) }}

        <div class="form-group" style="width: 28%;">

            <select class="form-control" id="selection" name="parameter" style="with:20px">

                <option value="" selected="true" disabled="disabled" placeholder="Select one">Select one</option>
                <option value="name">Name</option>
                <option value="brand">Brand</option>
                <option value="category_id">Category</option>

            </select>

        </div>

        <div class="form-group form-inline md-form form-sm mt-0 ml-3">

            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-45" name="search" type="text" placeholder="Search" aria-label="Search">

            <button class="btn btn-unique btn-rounded btn-sm my-0 ml-3" type="submit">Search</button>

        </div>

        {!! Form::close() !!}

        <br>

            <h3>Product List</h3>

        @if(!empty($products))
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < count($products); $i++)
                    <tr>
                        <td> {{$products[$i]->name}} </td>
                        <td> {{$products[$i]->description}} </td>
                        <td> {{$products[$i]->brand}} </td>
                        <td> {{$value['category'][$i]->name}} </td>
                        <td> {{$value['user'][$i]->name}} </td>
                        <td><a href="./edit/{{ $products[$i]->id }}" style="font-size:25px; color:blue;"><i class="fas fa-pen-square"></i></a>
                            <a href="/delete/{{ $products[$i]->id }}" style="font-size:25px; color:red;"><i class="fas fa-trash"></i></a> </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        @else
            <p>No Products Found</p>
            @endif
            </div>

    </div>
</div>

@endsection