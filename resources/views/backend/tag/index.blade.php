 @extends('layouts.app')
@section('content')

    <div class = "container">
        <h4>Data kategori</h4>
        <a href="{{ route ('tag.create') }}" class="btn btn-outline-info">Tambah Data</a>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Tag</th>
                                        <th scope="col">Slug</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($tag as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->slug }}</td>

                                        <td>
                                            <a href="{{ route('tag.edit',$data->id) }}"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('tag.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-info" type="submit">
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
           var alamat = "http://sephiyani.herokuapp.com/api/tag";

           $.ajax({
               url: alamat,
               method:"GET",
               dataType: "json",
               success: function(berhasil){
                   console.log(berhasil)
                   $.each(berhasil.data,function (key, val){
                       $('.data-tag').append(
                           `
                           <tr>
                                <td>${val.nama_tag}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-id="${val.id}" data-nama="${val-nama_tag}" >Edit</button>
                                    <button type="button" class="btn btn-danger" data-id="${val.id}">Hapus</button>
                                    </td>
                            </tr>
                            `
                       )
                   })
               }
           });
           $('.simpan-tag').on('click', function (e){
               e.preventDefault();

               var nama_tag = $('.nama_tag').val();
           })
        })
    </script>
    @endsection
