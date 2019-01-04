<div class="form-group">

    {{ Form::label($password, null, ['class' => 'control-label']) }} <br>
    {{ Form::Password($password, $attributes = ['class' => 'form-control']) }}

</div>