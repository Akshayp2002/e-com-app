<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Fashion Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Fashion Store eCommerce" name="description">
    <meta content="Shop, Fashion, eCommerce, Cart, Shop Cart, tailwind css, Admin, Landing" name="keywords">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="sr.dev.akshay@gmail.com">
    <meta name="version" content="1.0.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('../resources/assets/images/favicon.ico') }}">
</head>
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

{{-- <body class="dark:bg-slate-900"> --}}

<body>
    @yield('app')
</body>


    <script src=" https://cdn.jsdelivr.net/npm/material-design-icons-iconfont@6.7.0/build/build.min.js "></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</html>
