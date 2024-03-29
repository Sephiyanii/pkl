@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit data kategori</div>

                <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id )}}" method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama</label>
                    <input class="form-control" value="{{ $kategori->nama }}" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan data
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
