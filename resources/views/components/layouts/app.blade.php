<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>{{ $name . (isset($title) && $title ? ' | ' . $title : '') }}</title>
    <meta name="keywords" content="{{ $keyword }}">
    <meta property="og:url" content="{{ $property_url }}">
    <meta property="og:type" content="{{ $property_type }}">
    <meta property="og:title" content="{{ $property_title }}">
    <meta property="og:description" content="{{ $property_description }}">
    <meta name="description" content="{{ isset($description) && $description ? $description : $meta_description }}">
    <meta name="author" content="{{ $meta_author }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-montserrat">
    @include('components.partials.header')
    <main class="">
        {{ $slot }}
    </main>
    @include('components.partials.footer')
</body>
</html>
