@extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data kategori</h4>
        <a href="{{ route ('kategori.create') }}" class="btn btn-outline-info">Tambah Data</a>
        <p></p>

                            <div class="table-responsive">
                                <table class="table table-hover table-dark  ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Slug</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($kategori as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->slug }}</td>
                                        <td>
                                            <a href="{{ route('kategori.edit',$data->id) }}"
                                            class="btn btn-outline-info">Edit Data</a>
                                        </td>

                                        <td>
                                            <form action="{{ route('kategori.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-info" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           var alamat="admin/kategori";

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
                                <td>${val.slug}</td>
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

               var variable_isian_nama = $('input[name="nama"]').val();
               console.log(variable_isian_nama)
               $.ajax({
                   url:alamat,
                   method: "POST",
                   dataType: "json",
                   data: {
                       nama:variable_isian_nama
                   },
                   success: function (berhasil){
                       alert(berhasil.message)
                       location.reload();
                   },
                   error:function (gagal) {
            console.log(gagal)
                   }
               })
           })
        })
    </script>
    @endsection
