@extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data Artikel</h4>
        <a href="{{ route ('artikel.create') }}" class="btn btn-outline-primary"data-toggle="modal" data-target="#create">Tambah Data</a>
        <p></p>
       <table class ="table">
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
                <td>{{ $data->foto }}</td>

            <td>
                    <form action="{{ route('artikel.destroy', ['id'=>$data->id]) }}" method="post">
                    @csrf
                    $method('delete')

                    <a href="{{ route('artikel.edit', ['id'=>$data->id]) }}" class="btn btn-outline-light">Edit</a>
                     <a href="{{ route('artikel.edit', ['id'=>$data->id]) }}" class="btn btn-outline-success">Show</a>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection
