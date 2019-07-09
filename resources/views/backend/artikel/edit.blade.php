@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit data Artikel</div>

                <div class="card-body">
                <form action="{{ route('artikel.update', $artikel->id )}}" method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Judul</label>
                    <input class="form-control" value="{{ $artikel->judul }}" type="text" name="judul">
                    </div>
                     <div class="form-group">
                        <label for="">Slug</label>
                    <input class="form-control" value="{{ $artikel->slug }}" type="text" name="slug">
                    </div>
                     <div class="form-group">
                        <label for="">Content</label>
                    <input class="form-control" value="{{ $artikel->content }}" type="text" name="content">
                    </div>
                     <div class="form-group">
                        <label for="">Tag</label>
                    <input class="form-control" value="{{ $artikel->tag }}" type="text" name="tag">
                    </div>
                     <div class="form-group">
                        <label for="">Foto</label>
                    <input class="form-control" value="{{ $artikel->foto }}" type="file" name="foto">
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
