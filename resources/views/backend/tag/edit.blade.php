@extends('layouts.app')

@section('content')
<title>Create Tag</title>
    <div class="container">
        <form action="{{ route('tag.update', $tag->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div class="form-group">
              <label for="">Nama tag</label>
              <input type="text" name="nama" id="" class="form-control" value="{{ $tag->nama }}">
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id=""class="btn btn-outline-info" href="{{route('tag.index')}}" role="button">Kembali</a>


        </form>
    </div>
@endsection
