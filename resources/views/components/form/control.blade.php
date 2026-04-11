@props([
    'disabled' => false,
    'help' => null,
    'id' => null,
    'label' => null,
    'large' => false,
    'plaintext' => false,
    'readonly' => false,
    'small' => false,
    'type' => 'text',
    'value' => null,
])

@use('Illuminate\Support\Arr')

@php
$id ??= uniqid('');
@endphp

@if($label)
    <x-bs::form.label for="{{ $id }}">
        {{ $label }}
    </x-bs::form.label>
@endif

@if($type === 'textarea')
    <textarea {{ $attributes->merge([
        'id' => $id,
        'class' => Arr::toCssClasses([
            'form-control',
            'form-control-sm' => $small,
            'form-control-lg' => $large,
        ]),
        'disabled' => $disabled ? 'disabled' : null,
        'readonly' => $readonly ? 'readonly' : null,
        'aria-describedby' => $help ? "{$id}-help" : null,
    ]) }}>{{ $value ?? '' }}</textarea>
@else
    <input {{ $attributes->merge([
        'id' => $id,
        'class' => Arr::toCssClasses([
            'form-control',
            'form-control-sm' => $small,
            'form-control-lg' => $large,
            'form-control-plaintext' => $plaintext,
        ]),
        'type' => $type,
        'value' => $value,
        'disabled' => $disabled ? 'disabled' : null,
        'readonly' => $readonly ? 'readonly' : null,
        'aria-describedby' => $help ? "{$id}-help" : null,
    ]) }}/>
@endif

@if($help)
    <x-bs::form.text id="{{ $id }}-help">
        {{ $help }}
    </x-bs::form.text>
@endif
