<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Системні продажі')</title>
    <meta name="description" content="@yield('description', 'Виводимо продажі малого та середнього бізнесу на новий рівень')">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body class="bg-white min-h-screen antialiased">
    @include('partials.navbar')
    
    <main class="pt-24 lg:pt-28">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    @stack('scripts')
</body>
</html>

