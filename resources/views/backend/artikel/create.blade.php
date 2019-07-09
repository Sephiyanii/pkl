@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data kategori</div>

                <div class="card-body">
                <form action="{{ route('artikel.store') }}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input class="form-control" type="text" name="judul">
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input class="form-control" type="text" name="slug">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input class="form-control" type="text" name="content">
                </div>
                <div class="form-group">
                    <label for="">Tag</label>
                    <input class="form-control" type="text" name="tag">
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input class="form-control" type="file" name="foto">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-outline-primary">Simpan Data</button>
                    <a href="{{ route('artikel.index') }}" class="btn btn sm btn-danger">Back</a>
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
