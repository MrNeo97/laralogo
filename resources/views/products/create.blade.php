@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-heading">
                        Create Products
                    </div>
                    <div class="card-body">
                        {!! Form::open(['method' => 'post']) !!}

                        {{ Form::Text('name', '', ['placeholder' => 'Company Name']) }}
                        {{ Form::Text('website', '', ['placeholder' => 'Company Website']) }}
                        {{ Form::Text('email', '', ['placeholder' => 'Contact Email']) }}
                        {{ Form::Text('phone', '', ['placeholder' => 'Contact Phone']) }}
                        {{ Form::Text('address', '', ['placeholder' => 'Business Address']) }}
                        {{ Form::TextArea('bio', '', ['placeholder' => 'About this business']) }}
                        {{ Form::Submit('Submit') }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection