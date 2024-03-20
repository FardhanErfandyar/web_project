<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styledetail.css') }}" >
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
                <li><a href="#">Add</a></li>
                <li><a href="{{ url('/profile')}}">Profile</a></li>
                <li><a href="{{ url('/login') }}"><button id="loginButton">Login</button></a></li>
            </ul>
        </div>
    </nav>


<!-- futsal fields -->


@yield('home')


<!-- detai -->

@yield('detail')


<!-- contact -->

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class='bx bxs-envelope'></i><a href="">contact@gmail.com</a></p>
                <p><i class='bx bxs-phone'></i><a href="">0827266292</a></p>
            </div>
        </div>
    </div>
</div>


</body>
</html>