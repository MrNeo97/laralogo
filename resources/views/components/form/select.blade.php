<div class="form-group">

    {{ Form::label($name, null, ['class' => 'control-label']) }} <br>
    {{ Form::Select($name, $value, $selected, $attributes = ['class' => 'form-control']) }}

</div>