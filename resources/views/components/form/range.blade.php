@props([
    'disabled' => false,
    'help' => null,
    'id' => null,
    'label' => null,
])

@php
$id ??= uniqid('');
@endphp

@if($label)
    <x-bs::form.label for="{{ $id }}">
        {{ $label }}
    </x-bs::form.label>
@endif

<input {{ $attributes->merge([
    'id' => $id,
    'class' => 'form-range',
    'type' => 'range',
    'disabled' => $disabled ? 'disabled' : null,
    'aria-describedby' => $help ? "{$id}-help" : null,
]) }}/>

@if($help)
    <x-bs::form.text id="{{ $id }}-help">
        {{ $help }}
    </x-bs::form.text>
@endif
