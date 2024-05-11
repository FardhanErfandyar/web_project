@extends('layouts.main')

@section('profile')

    <div class="profile-container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <div class="profile-image">
                @if (auth()->user()->image)
                    <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="">
                @else
                    <img src="/img/profile.png" alt="Default Profile Image">
                @endif
        </div>

        <div class="form-profile-delete">
            <form action="/profile/{{ auth()->user()->id }}" method="POST">
            @method('delete')
            @csrf
                <button type="submit" class="delete-image-button" onclick="return confirm('Hapus profile picture ini?')">
                    <span>Delete Picture</span>
                </button>
            </form>
        </div>



        <div class="form-profile">
            <form action="/profile/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
            @csrf
            <div class="form-group-profile">
                <div class="file-upload">
                    <label for="file-upload" class="file-upload-label">Choose Image</label>
                    <input id="file-upload" type="file" name="image" accept="image" onchange="updateButtonColor(this)">
                </div>
            </div>

            <h1>{{ auth()->user()->name }}</h1>
            <p>{{ auth()->user()->email }}</p>

                <div class="card-body-profile">
                    <div class="mb-3">
                        <label for="telp" class="form-label">No telepon</label>
                        <input type="number" name="telp" value="{{ old('telp', auth()->user()->telp) }}" class="form-control" id="telp" placeholder="No Telepon">
                    </div>
                    @error('telp')
                            <span class="text-danger mb-20">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="age" class="form-label">Umur</label>
                        <input type="number" name="age" value="{{ old('age', auth()->user()->age) }}" class="form-control" id="age" placeholder="Umur">
                    </div>
                    @error('age')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" value="{{ old('address', auth()->user()->address) }}" class="form-control" id="address" placeholder="Alamat">
                    </div>
                    @error('address')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                    

                    <button type="submit" class="btn btn-dark" onclick="return confirm('Save?')">Save Profile</button>
                </div>

            </form>
        </div>
    </div>

<script>
    function updateButtonColor(input) {
        var label = document.querySelector('.file-upload-label');
        if (input.files && input.files[0]) {
            label.classList.add('selected'); 
        } else {
            label.classList.remove('selected');
        }
    }
</script>


@endsection