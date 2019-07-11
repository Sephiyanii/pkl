$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "api/kategori";

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".data-kategori").append(
                    `
                    <tr>
                    <td>${key}</td>
                    <td>${value.nama}</td>
                    <td>${value.slug}</td>
                    <td>
                    <button type="button" class="btn btn-primary e-kategori" data_id="${
                        value.id
                    }" data-toggle="modal" data-target="#edit-kategori" data-nama="${
                        value.nama
                    }">EDIT</button>
                    <button class="btn btn-danger btn-sm hapus-data" data-id="${
                        value.id
                    }">Hapus</button>
                    </td></tr>
                    `
                );
            });
        }
    });

    // Simpan Data
    $(".kategori-simpan").on("click", function(simpan) {
        simpan.preventDefault();
        var variable_isian_nama = $("input[name=nama]").val();
        // console.log(nama)
        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "json",
            data: {
                nama: variable_isian_nama
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // Hapus Data
    $(".data-kategori").on("click", ".hapus-data", function() {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });
});
