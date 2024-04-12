@extends('dashboard.layouts.main')

@section('container')
    <body>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Field</h1>
        </div>
        <div class="container">
        <div class='row justify-content-left'>    
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                    <form action="/insertlapangan" method="POST" enctype="multipart/form-lapangan">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="namaLapangan" class="form-label">Nama Lapangan</label>
                                <input type="text" name="name" class="form-control" id="namaLapangan" placeholder="Masukkan nama lapangan">
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" name="district" class="form-control" id="exampleinput" placeholder="Masukkan kecamatan lapangan">
                            </div>
                            <div class="mb-3">
                                <label for="alamatLapangan" class="form-label">Alamat Lapangan</label>
                                <input type="text" name="address" class="form-control" id= "exampleinput" placeholder="Masukkan Alamat lapangan">
                            </div>
                            <div class="mb-3">
                                <label for="hargaSewa" class="form-label">Harga Sewa</label>
                                <input type="text" name="price" class="form-control" id="exampleinput" placeholder="Masukkan Harga sewa per jam lapangan, ex: Rp100.000,00/Jam">
                            </div>
                            <div class="mb-3">
                                <label for="jamOperasional" class="form-label">Jam Operasional</label>
                                <input type="text" name="time" class="form-control" id="exampleinput" placeholder="Masukkan jam operasional lapangan, ex: 15.00 - 16.00">
                            </div>
                            <div class="mb-3">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input type="text" name="facility" class="form-control" id="exampleinput" placeholder="Masukkan fasilitas yang ada">
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>

                        </form>

    @endsection
    </body>
</html>