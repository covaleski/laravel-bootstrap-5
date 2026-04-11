@props([
    'checked' => false,
    'disabled' => false,
    'id' => null,
    'label' => '',
    'radio' => false,
    'switch' => false,
])

@use('Illuminate\Support\Arr')

@php
$id ??= uniqid('');
@endphp

<div class="{{ Arr::toCssClasses([
    'form-check',
    'form-switch' => $switch,
]) }}">
    <input {{ $attributes->merge([
        'id' => $id,
        'class' => Arr::toCssClasses([
            'form-check-input',
        ]),
        'type' => $radio ? 'radio' : 'checkbox',
        'disabled' => $disabled ? 'disabled' : null,
        'checked' => $checked ? 'checked' : null,
    ]) }}/>
    <label class="form-check-label" for="{{ $id }}">
        {{ $label }}
    </label>
</div>
