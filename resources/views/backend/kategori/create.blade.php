@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data kategori</div>

                <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-outline-info">Back</a>
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
