@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">

            <h3>Listado de productos</h3>

            @if(!empty($products))
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>User</th>
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