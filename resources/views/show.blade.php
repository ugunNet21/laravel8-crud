@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Mahasiswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update/' . $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="masukan nama"
                                value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" name="nim" class="form-control" placeholder="184322 "
                                value="{{ $data->nim }}">
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="bandung">{{ $data->alamat }}
                            </textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit Mahasiswa</button>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('/') }}">
                                << Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
