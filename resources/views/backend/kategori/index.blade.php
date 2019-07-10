@extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data kategori</h4>
        <a href="{{ route ('kategori.create') }}" class="btn btn-outline-primary">Tambah Data</a>
        <p></p>
       <table class ="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
                @php $no =0; @endphp

                @foreach ($kategori as $data)
                @php
                $no++
                @endphp

            <tr>
            <td scope ="row">{{ $no }}</td>
            <td>{{ $data->nama }}</td>

             <td>
                 <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-outline-danger">Edit</a></td>
         <td>
             <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
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
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           var alamat="http://sephiyani.herokuapp.com/api/category";

           $.ajax({
               url: alamat,
               method:"GET",
               dataType: "json",
               success: function(berhasil){
                   console.log(berhasil)
                   $.each(berhasil.data,function (key, val){
                       $('.data-kategori').append(
                           `
                           <tr>
                                <td>${val.nama}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-id="${val.id}" data-nama="${val-nama}" >Edit</button>
                                    <button type="button" class="btn btn-danger" data-id="${val.id}">Hapus</button>
                                    </td>
                            </tr>
                            `
                       )
                   })
               }
           });
           $('.simpan-kategori').on('click', function (e){
               e.preventDefault();

               var nama = $('.nama').val();
           })
        })
    </script>
    @endsection
