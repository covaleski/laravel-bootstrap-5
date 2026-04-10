@use('Illuminate\Support\Arr')

<script {!! Arr::toHtmlAttributes([
    'crossorigin' => 'anonymous',
    'href' => $url,
    'integrity' => $hash,
    'type' => 'text/javascript',
]) !!}></script>
