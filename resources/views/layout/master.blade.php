<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    
    @include('layout.header')

    @include('layout.sidebar')

    <main class='max-w-6xl mx-auto p-4'>
        @yield('content')
    </main>

    <footer>
        @include('layout.footer')
    </footer>

</body>

<script src="js/dashboard.js"></script>

</html>