@use('Illuminate\Support\Arr')

<link {!! Arr::toHtmlAttributes([
    'crossorigin' => 'anonymous',
    'href' => $url,
    'integrity' => $hash,
    'rel' => 'stylesheet',
]) !!}/>
