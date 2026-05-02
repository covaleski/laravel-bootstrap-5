@props([
    'disabled' => false,
    'href' => null,
    'large' => false,
    'outline' => false,
    'small' => false,
    'type' => 'button',
    ...variants(),
])

@variant($variant)

<{{ $href ? 'a' : 'button' }} {{ $attributes->merge([
    'class' => \Illuminate\Support\Arr::toCssClasses([
        'btn',
        'btn-' . ($outline ? 'outline-' : '') . $variant,
        'btn-lg' => $large,
        'btn-sm' => $small,
        'disabled' => $disabled && $href,
    ]),
    'type' => $type,
    'disabled' => $disabled && !$href ? 'disabled' : null,
    'tabindex' => $disabled && $href ? '-1' : null,
    'role' => $href ? 'button' : null,
    'aria-disabled' => $disabled && $href ? 'true' : null,
]) }}>
    {{ $slot }}
</{{ $href ? 'a' : 'button' }}>
