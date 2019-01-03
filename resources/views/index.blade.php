@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">

            <h3>Listado de productos</h3>

        @if(count($products))
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description  </th>
                    <th>Brand </th>
                    <th>User ID</th>
                    <th>Category ID </th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td> {{$product->name}} </td>
                        <td> {{$product->description}} </td>
                        <td> {{$product->brand}} </td>
                        <td> {{$product->user_id}} </td>
                        <td> {{$product->category_id}} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No Products Found</p>
            @endif
        </div>
    </div>
</div>

@endsection