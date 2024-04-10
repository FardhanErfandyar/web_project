<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" >
    <link rel="stylesheet" href="/css/stylelog.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <title>Fields</title>
</head>
<body>

<!-- navbar -->

 @include('layouts.navbar')

<!-- futsal fields -->
@yield('home')

<!-- detai -->
@yield('detail')

{{-- Signup --}}
@yield('signup')

{{-- Login --}}
@yield('login')

{{-- profile --}}
@yield('profile')

{{-- districts --}}
@yield('districts')

{{-- district (single post) --}}
@yield('district')

<!-- contact -->

@include('layouts.contact')

<script src="/js/navbar.js"></script>

</body>
</html>