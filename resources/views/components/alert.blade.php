@props([
    'dismissible' => false,
    ...variants(),
])
@variant($variant)

<div {{ $attributes->merge([
    'class' => \Illuminate\Support\Arr::toCssClasses([
        'alert',
        "alert-{$variant}",
        'alert-dismissible fade show' => $dismissible,
    ]),
    'role' => 'alert',
]) }}>
    {{ $slot }}
    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    @endif
</div>
