<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Roberto Blog')</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- font awesome --}}
    {{-- Tipografia  --}}

    @stack('css')
</head>
<body>

    <header></header>

    @yield('content')

    <footer></footer>

    @stack('js')
</body>
</html> 