@props([
    'disabled' => false,
    'help' => null,
    'id' => null,
    'label' => null,
    'large' => false,
    'multiple' => false,
    'placeholder' => null,
    'small' => false,
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

<select {{ $attributes->merge([
    'id' => $id,
    'class' => Arr::toCssClasses([
        'form-select',
        'form-select-sm' => $small,
        'form-select-lg' => $large,
    ]),
    'multiple' => $multiple ? 'multiple' : null,
    'disabled' => $disabled ? 'disabled' : null,
    'aria-describedby' => $help ? "{$id}-help" : null,
]) }}>
    @if($placeholder)
        <option selected="selected" disabled="disabled" hidden="hidden">
            {{ $placeholder }}
        </option>
    @endif
    {{ $slot }}
</select>

@if($help)
    <x-bs::form.text id="{{ $id }}-help">
        {{ $help }}
    </x-bs::form.text>
@endif
