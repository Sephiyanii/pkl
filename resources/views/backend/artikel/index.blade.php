@extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data Artikel</h4>
        <a href="{{ route ('artikel.create') }}" class="btn btn-outline-primary">Tambah Data</a>
        <p></p>
       <table class ="table  table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Content</th>
                    <th>Tag</th>
                    <th>foto</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
                @php $no =0; @endphp

                @foreach ($artikel as $data)
                @php
                $no++
                @endphp

            <tr>
            <td scope ="row">{{ $no }}</td>
            <td>{{ $data->judul }}</td>
             <td>{{ $data->slug }}</td>
              <td>{{ $data->content }}</td>
               <td>{{ $data->tag }}</td>
                <td><img src="{{ asset('assets/img/artikel/'.$data->foto)}}" width="15%"</td>

             <td>
                 <a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-outline-danger">Edit</a></td>
         <td>
             <form action="{{ route('artikel.destroy', $data->id) }}" method="POST">
                 @csrf
             <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-outline-primary">Hapus</button>
                </form>
             </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection
