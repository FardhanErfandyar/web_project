@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Field</h1>
        </div> 
        <div class="col-8 card">
            <form action="/dashboard/posts" method="POST">
            @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="namaLapangan" class="form-label">Nama Lapangan</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama lapangan">
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan/Daerah</label>
                        <input type="text" name="district" class="form-control" id="district" placeholder="Masukkan kecamatan atau daerah lapangan">
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>

            </form>
        </div>

@endsection
