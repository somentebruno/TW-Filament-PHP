<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Confira os produtos disponíveis em nosso catálogo.">
    <title>Produtos | {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <header class="page-header">
        <div class="page-header__inner">
            <a class="page-header__brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
        </div>
    </header>
    <main class="page-main">
        <livewire:product-list />
    </main>
    @livewireScripts
</body>
</html>
