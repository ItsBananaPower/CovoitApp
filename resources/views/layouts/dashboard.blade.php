<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Covoit App')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        @include('partials.header')
        
        <div class="content">
            @yield('content')
        </div>

        @include('partials.footer')
    </div>
</body>
</html>