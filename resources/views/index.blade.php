@extends('layouts.app')

@section('content')

    @if(count($products))
        <table class="table">
            <thead>
            <tr>
                <th> ID</th>
                <th> Name</th>
                <th> Description  </th>
                <th> Brand </th>
                <th> User ID</th>
                <th> Category ID </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td> {{$product->id}} </td>
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

@endsection