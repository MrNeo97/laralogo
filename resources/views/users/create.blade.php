@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-heading">
                        <div class="card-header" style="font-size:25px">
                            Create User
                            <i class="fas fa-plus-circle" style="color: blue"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'UsersController@store', 'method' => 'post']) !!}

                        {{ Form::bsText('name', '', ['placeholder' => 'User Name']) }}
                        {{ Form::bsText('email', '', ['placeholder' => 'Email User']) }}

                        @if(count($rol))

                            {{ Form::bsSelect('rol', $rol) }}

                        @endif

                        {{ Form::bsPassword('password', ['placeholder' => 'Enter password']) }}

                        {{ Form::bsSubmit('Submit') }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection