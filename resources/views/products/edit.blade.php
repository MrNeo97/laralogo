@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <col-md-8 class="col-mdoffset-2">
                <div class="card-header" style="font-size:25px">
                    Product edit <i class="fas fa-pen-square" style="color: blue"></i>
                </div>
                <div class="card-body">
                    <!-- -->
                    {!! Form::model($product, ['action' => ['ProductsController@update', $product->id], 'method' => 'put']) !!}

                    {{ Form::bsText('name') }}
                    {{ Form::bsText('description') }}
                    {{ Form::bsText('brand') }}
                    {{ Form::hidden('user_id') }}
                    {{ Form::bsSelect('category_id') }}
                    {{ Form::bsSubmit('Submit') }}

                    {!! Form::close() !!}
                </div>
            </col-md-8>
        </div>
    </div>

@endsection