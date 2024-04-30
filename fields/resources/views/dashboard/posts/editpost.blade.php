@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Field</h1>
        </div> 

        @if (@session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="col-8 card">
            <form action="/dashboard/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lapangan</label>
                        <input type="text" name="name" value="{{ old('name', $post->name) }}" class="form-control" id="name" placeholder="Masukkan nama lapangan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan/Daerah</label>
                        <select class="form-select" name="district_id">
                            @foreach ($districts as $district)
                                @if (old('district_id', $post->district_id) == $district->id)
                                    <option value="{{ $district->id }}" selected>{{ $district->name }}</option>
                                @else
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" value="{{ old('address', $post->address) }}" class="form-control" id="address" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Waktu Operasional</label>
                        <input type="text" name="time" value="{{ old('time', $post->time) }}" class="form-control" id="time" placeholder="Waktu Operasional">
                    </div>
                    <div class="mb-3">
                        <label for="facility" class="form-label">Fasilitas</label>
                        <input type="text" name="facility" value="{{ old('facility', $post->facility) }}" class="form-control" id="facility" placeholder="Fasilitas">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga per jam</label>
                        <input type="text" name="price" value="{{ old('price', $post->price) }}" class="form-control" id="price" placeholder="Harga per jam">
                    </div>
                    <div class="mb-3">
                        <label for="map" class="form-label">map</label>
                        <input type="text" name="map" value="{{ old('map', $post->map) }}" class="form-control" id="map" placeholder="map">
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Foto Lapangan</label>

                        <input type="hidden" name="oldImages" value="{{ $post->images->pluck('image')->implode(',') }}">
                         @foreach($post->images as $image)
                            <div class="image-container">
                                <form action="/images/{{ $image->id }}" method="POST" class="delete-image-form">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-link" onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">
                                        <img id="slide-{{ $loop->index }}" src="{{ asset('storage/'.$image->image) }}" alt="{{ $post->name }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" width="200" height="200">
                                    </button>
                                </form>
                            </div>
                        @endforeach

                        <input class="form-control" type="file" id="images" name="images[]" multiple>
                    </div>

                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>

            </form>
        </div>

<script>
    $(document).ready(function() {
    $('.delete-image-form').submit(function(event) {
        event.preventDefault(); // Mencegah pengiriman formulir

        var form = $(this); // Simpan referensi ke formulir saat ini
        var url = form.attr('action'); // Ambil URL dari atribut action formulir

        var confirmation = confirm('Apakah Anda yakin ingin menghapus gambar ini?');

        if (confirmation) {

            $.ajax({
                url: url,
                type: 'DELETE',
                data: form.serialize(), // Kirim data formulir
                success: function(response) {
                    // Gambar berhasil dihapus, lakukan sesuatu jika perlu
                    console.log(response);
                    // Hapus gambar dari DOM jika diperlukan
                    form.closest('.image-container').remove();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });
});

</script>

@endsection
