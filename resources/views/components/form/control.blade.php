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
    <label for="{{ $id }}" class="form-label">
        {{ $label }}
    </label>
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
<div id="{{ $id }}-help" class="form-text">
    {{ $help }}
</div>
@endif
