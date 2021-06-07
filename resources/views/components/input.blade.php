@props(['disabled' => false, 'field'])

    <input {{ $disabled ? 'disabled' : '' }}
    {!! ($errors->has($field))
        ? $attributes->merge(['class' => "form-control is-invalid"])
        : $attributes->merge(['class' => "form-control"]) !!} 
       >

    <x-error field="{{ $field }}" />

