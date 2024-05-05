<nav class="navbar-home"> 
        <div class="logo">
            <h1><a href="/">Fields.</a></h1>
        </div>
        <div class="navbar-list">
            <ul>
                <li><a href="/">Home</a></li> 
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
