@extends('layouts.app')

@section('content')

    @if(count($products))
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Brand</th>
                <th>User</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($products); $i++)
                <tr>
                    <td> {{$products[$i]->name}} </td>
                    <td> {{$products[$i]->description}} </td>
                    <td> {{$products[$i]->brand}} </td>
                    <td> {{$user[$i]->name}} </td>
                    <td> {{$category[$i]->name}} </td>
                    <td><a href="./edit/{{ $products[$i]->id }}" style="font-size:25px; color:blue;"><i class="fas fa-pen-square"></i></a>
                        <a href="" style="font-size:25px; color:red;"><i class="fas fa-trash"></i></a> </td>
                </tr>
            @endfor
            </tbody>
        </table>
    @else
        <p>No Products Found</p>
        @endif
        </div>

@endsection