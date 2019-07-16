@extends('layouts.app')

@section('content')
<title>Create Tag</title>
    <div class="container">
        <form action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Nama Tag</label>
              <input type="text" name="nama" id="" class="form-control" >
            </div>
            <button type="submit" class="btn btn-outline-info">Simpan</button>
            <a name="" id="" class="btn btn-outline-info" href="{{route('tag.index')}}" role="button">Kembali</a>


        </form>
    </div>
@endsection
