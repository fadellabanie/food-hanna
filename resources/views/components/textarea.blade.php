@props(['field'])

<textarea {!! ($errors->has($field))
    ? $attributes->merge(['class' => "form-control is-invalid"])
    : $attributes->merge(['class' => "form-control"]) !!} 
rows="7">
</textarea>


<x-error field="{{ $field }}" />
