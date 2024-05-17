

@extends('layouts.main')

@section('signup')
    
    <div class="container-login">
        <div class="form-box">
            <h1>Change Password</h1>
            <form action="/dashboard/admin/user/{{ $user->id }}" method="post">
                @method('put')
                @csrf

                <div class="input-group">
                    <div class="input-field">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" name="old_password" id="old_password" placeholder="Old Password">
                    </div>
                    @error('old_password')
                            <span class="error-message">{{ $message }}</span>
                    @enderror

                    <div class="input-field">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" name="password" id="new_password" placeholder="New Password">
                    </div>
                    @error('password')
                            <span class="error-message">{{ $message }}</span>
                    @enderror

                    <div class="input-field">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-enter New Password">
                    </div>

                    <button type="submit" id="SignupButton">Confirm</button>
                </div>

            </form>
        </div>
    </div>
@endsection
