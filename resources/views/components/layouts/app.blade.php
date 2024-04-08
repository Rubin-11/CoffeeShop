<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/components/footer.css', 'resources/js/app.js','resources/css/pages/main.css'])

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<div class="container center">
<livewire:components.header/>

{{--    @if (Route::has('login'))--}}
{{--        <livewire:welcome.navigation />--}}
{{--    @endif--}}
{{ $slot }}
<livewire:components.footer/>
</div>
</body>
</html>
