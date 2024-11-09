<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/carousel.css">
    <link rel="stylesheet" href="/assets/css/card.css">
    <link rel="stylesheet" href="/assets/css/section.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>
    <x-header />  
    <main>
        @yield('content')  
    </main>

    <x-footer /> 
</body>
<script src="/assets/js/carousel.js"></script>
<script src="/assets/js/accordeon.js"></script>

</html>
