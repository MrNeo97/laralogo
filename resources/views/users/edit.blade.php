@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-heading">
                        <div class="card-header" style="font-size:25px">
                            Edit User
                            <i class="fas fa-pen-square" style="color: blue"></i>
                        </div>
                    </div>
                    <div class="card-body">

                        {!! Form::model($user, ['action' => ['UsersController@update', $user->id], 'method' => 'get']) !!}

                        {{ Form::bsText('name') }}
                        {{ Form::bsText('email') }}
                        {{ Form::bsPassword('password') }}

                        {{ Form::label('rol', null, ['class' => 'control-label']) }}
                        <select name="rol" class="form-control">
                            <!--<option value="" selected="true" disabled="disabled" placeholder="Select one"></option>-->

                            @foreach($roles as $key => $rol)

                                <option value="{!! $rol !!}"
                                        {!! $rol == $user['rol'] ? 'selected' : '' !!}
                                >{!! $rol !!}</option>

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