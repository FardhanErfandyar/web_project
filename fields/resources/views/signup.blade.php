

@extends('layouts.main')

@section('signup')
    
    <div class="container-login">
        <div class="form-box">
            <h1>Sign Up</h1>
            <form action="/signup" method="post">
                @csrf

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class='bx bxs-user' ></i>
                        <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" placeholder="Name">
                    </div>
                    @error('name')
                            <span class="error-message">{{ $message }}</span>
                    @enderror

                    <div class="input-field">
                        <i class='bx bxs-envelope'></i>
                        <input type="email" name="email" id="email" class="is-invalid" placeholder="Email">
                    </div>
                    @error('email')
                            <span class="error-message">{{ $message }}</span>
                    @enderror

                    <div class="input-field">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" name="password" id="password" class="is-invalid" placeholder="Password">
                    </div>
                    @error('password')
                            <span class="error-message">{{ $message }}</span>
                    @enderror
                    <a href="/signup"><button type="submit" id="SignupButton">Sign Up</button></a>
                </div>
            </form>
        </div>
    </div>
@endsection
