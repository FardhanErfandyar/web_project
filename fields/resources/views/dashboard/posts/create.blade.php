@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Field</h1>
        </div> 
        <div class="col-8 card">
            <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lapangan</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama lapangan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan/Daerah</label>
                        <select class="form-select" name="district_id">

                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Waktu Operasional</label>
                        <input type="text" name="time" class="form-control" id="time" placeholder="Waktu Operasional">
                    </div>
                    <div class="mb-3">
                        <label for="facility" class="form-label">Fasilitas</label>
                        <input type="text" name="facility" class="form-control" id="facility" placeholder="Fasilitas">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga per jam</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Harga per jam">
                    </div>
                    <div class="mb-3">
                        <label for="map" class="form-label">map</label>
                        <input type="text" name="map" class="form-control" id="map" placeholder="map">
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Foto Lapangan</label>
                        <input class="form-control" type="file" id="images" name="images[]" multiple>
                    </div>


                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>

            </form>
        </div>

@endsection
