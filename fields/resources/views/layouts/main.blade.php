<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styledetail.css') }}" >
    <link rel="stylesheet" href="css/stylelog.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <title>Fields</title>
</head>
<body>

<!-- navbar -->

    <nav class="navbar"> 
        <div class="logo">
            <h1><a href="{{ url('/')}}">Fields.</a></h1>
        </div>
        <div class="navbar-list">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/#Lapangan1">Venue</a></li>
                <li><a href="/districts">Districts</a></li>
                @auth
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="/profile">Profile</a></li>

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

<script>
    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar');
        var dropdownLinks = document.querySelectorAll('.navbar .dropdown a');
        var dropdownContent = document.querySelector('.dropdown-content')

        if (window.scrollY > 20) {
            navbar.classList.remove('transparent');
            dropdownContent.classList.remove('transparent');
          
            dropdownLinks.forEach(function(link) {
                link.style.color = '#FBA834';
            });
        } else {
            navbar.classList.add('transparent');
            dropdownContent.classList.add('transparent');
      
            dropdownLinks.forEach(function(link) {
                link.style.color = '#ffff';
            });
        }
    });
</script>


</body>
</html>