<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Phone Book</title>

    {{-- compile sass styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <navbar></navbar>
        <div class="container">
            <router-view></router-view>
        </div>
        <app-footer></app-footer>
    </div>
    {{-- compressed app.js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>