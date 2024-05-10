<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- Add this in the <head> section of your HTML file -->
    <link href=" https://cdn.jsdelivr.net/npm/feather-icon@0.1.0/css/feather.min.css " rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite ([
    "resources/js/app.js",
    "resources/assets/css/tailwind.min.css",
    "resources/assets/js/plugins.init.js",
    "resources/assets/js/app.js",
    ])

    @spladeHead
</head>

<body class="font-sans antialiased">
    @splade

    <script src=" https://cdn.jsdelivr.net/npm/material-design-icons-iconfont@6.7.0/build/build.min.js "></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>
