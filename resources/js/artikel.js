(function($) {
    var tambahdata = {
        limit: 50,
        page: 1
    };
    function artikel() {
        $.ajax({
            url: "admin/artikel",
            type: "GET",
            dataType: "json",
            data: tambahdata
        });
    }
});
