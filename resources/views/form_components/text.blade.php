<div class="form-group {{ $errors->has($name) ? ' has-error' : '' }}" >
    {{ Form::label($name, $label_name,['class' => 'control-label']) }}
    {{ Form::text($name, $value, array_merge(['class' =>  'form-control'], $attributes)) }}
    @if($errors->has($name))
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>