<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/styledetail.css') }}" >
    <link rel="stylesheet" href="/css/stylelog.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <title>Fields</title>
</head>
<body>

<!-- navbar -->

    <nav class="navbar"> 
        <div class="logo">
            <h1><a href="#">Fields.</a></h1>
        </div>
        <div class="navbar-list">
            <ul>
                <li><a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a></li> 
                <li><a href="/#Lapangan1">Venue</a></li>
                <li><a href="/districts" class="{{ Request::path() === 'districts' ? 'active' : '' }}">Districts</a></li>
                @auth
                    
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/profile" class="{{ Request::path() === 'profile' ? 'active' : '' }}">Profile</a></li>

                    <div class="dropdown">
                        <a href="#">Welcome back, {{ auth()->user()->name }}</a>
                        <div class="dropdown-content">
                            <form action="/logout" method="post">
                                @csrf
                                
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/login"><button id="loginButton">Login</button></a>
                @endauth
            </ul>
        </div>
    </nav>


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

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class='bx bxs-envelope'></i><a href="">contact@gmail.com</a></p>
                <p><i class='bx bxs-phone'></i><a href="">08989898989</a></p>
            </div>
        </div>
    </div>
</div>

<script src="/js/navbar.js"></script>


</body>
</html>