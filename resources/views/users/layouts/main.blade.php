<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrialTask - Home</title>
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    @stack('styles')
</head>
<body>

    @include('users.layouts.header')

    <main>
        @yield('content')
    </main>

</body>
</html>
