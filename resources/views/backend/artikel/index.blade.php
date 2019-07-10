  @extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data Artikel</h4>
        <a href="{{ route ('artikel.create') }}" class="btn btn-outline-primary">Tambah Data</a>
        <p></p>
       <table class ="table table-dark">
            <thead>
                <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul Artikel</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Konten</th>
                                        <th scope="col">kategori</th>
                                        <th scope="col">Slug</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($artikel as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td><img  src="{{ asset('assets/img/artikel/'.$data->foto)}}" width="15%"></td>
                                        <td>{{ $data->konten }}</td>
                                        <td>{{ $data->kategori}}</td>
										<td>{{ $data->slug }}</td>
                                        <td>
                                            <a href="{{ route('artikel.edit',$data->id) }}"
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('artikel.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Hapus Data
                                                </button>
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
           var alamat = "http://sephiyani.herokuapp.com/api/article";

           $.ajax({
               url: alamat,
               method:"GET",
               dataType: "json",
               success: function(berhasil){
                   console.log(berhasil)
                   $.each(berhasil.data,function (key, val){
                       $('.data-article').append(
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
           $('.simpan-article').on('click', function (e){
               e.preventDefault();

               var nama = $('.nama').val();
           })
        })
    </script>
    @endsection
