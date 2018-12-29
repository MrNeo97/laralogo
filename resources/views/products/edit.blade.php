@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-heading">
                        <div class="card-header" style="font-size:25px">
                            Edit Product
                            <i class="fas fa-pen-square" style="color: blue"></i>
                        </div>
                    </div>
                    <div class="card-body">

                        {!! Form::model($product, ['action' => ['ProductsController@update', $product->id], 'method' => 'get']) !!}

                        {{ Form::bsText('name') }}
                        {{ Form::bsText('description') }}
                        {{ Form::bsText('brand') }}
                        {{ Form::hidden('user_id') }}

                        {{ Form::label('category', null, ['class' => 'control-label']) }}
                        <select name="category" class="form-control">
                            <!--<option value="" selected="true" disabled="disabled" placeholder="Select one"></option>-->

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ $category->id == $product['category_id'] ? 'selected' : '' }}
                            >{{ $category->name }}</option>

                        @endforeach

                        </select> <br>

                        {{ Form::bsSubmit('Submit') }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection