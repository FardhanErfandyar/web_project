

@extends('layouts.main')

@section('login')
    
    <div class="container-login">
        <div class="form-box">
            <h1>Login</h1>
            <form action="/login" method="post">
                @csrf

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class='bx bxs-user' ></i>
                        <input type="email" name="email" id="email" class="is-invalid" placeholder="Email">
                    </div>
                    @error('email')
                            <span class="error-message">{{ $message }}</span>
                    @enderror

                    <div class="input-field">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" name="password" id="password" class="is-invalid" placeholder="Password">
                    </div>
                    <p>Don't have account?<a href="/signup"> Click here!</a></p>
                    <a href="/login"><button type="submit" id="LoginButton">Login</button></a>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                         </div>
                    @endif

                    @if(session()->has('loginError'))
                        <div class="alert alert-loginerror">
                            {{ session('loginError') }}
                         </div>
                    @endif  
                </div>
            </form>
        </div>
    </div>
@endsection
    
