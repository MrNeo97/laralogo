@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-heading">
                        <div class="card-header" style="font-size:25px">
                                Create Product
                                <i class="fas fa-plus-circle" style="color: blue"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'ProductsController@store', 'method' => 'post']) !!}

                        {{ Form::bsText('name', '', ['placeholder' => 'Product Name']) }}
                        {{ Form::bsText('description', '', ['placeholder' => 'Description Product']) }}
                        {{ Form::bsText('brand', '', ['placeholder' => 'Brand Name']) }}
                        {{ Form::hidden('user_id', Auth::user()->id , []) }}

                        @if(count($categories))

                            {{ Form::bsSelect('category', $categories) }}

                        @endif

                        {{ Form::bsSubmit('Submit') }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection