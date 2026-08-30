<!DOCTYPE html>
<html
    lang="{{ app()->getLocale() }}"
    class="overflow-x-hidden"
>
<head>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'GastronomIA' }}</title>

    <meta
        name="description"
        content="{{ $description ?? 'GastronomIA — Technology built for professional kitchens.' }}"
    >

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=open-sans:400,500,600,700|sora:400,500,600,700&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden bg-gia-cream font-sans text-gia-ink antialiased">
    {{ $slot }}
</body>
</html>