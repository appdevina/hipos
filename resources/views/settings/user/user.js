$(document).ready(function() {
    console.log("halo123");
    dt_user();

    function dt_user() {
        // Datatable design
        $("#dt_user").DataTable({
            destroy: true,
            lengthChange: false,
            searching: true,
            ordering: true,
            paging: true,
            responsive: true,
            dom: "Bfrtip",
            buttons: [
                {
                    extend: "excelHtml5",
                    text: "Export to Excel",
                    footer: true,
                },
            ],
            ajax: {
                dataType: "json",
                type: "GET",
                url:
                    window.location.protocol +
                    "//" +
                    window.location.hostname +
                    "/users/list",
            },
            columns: [
                {
                    data: "nik",
                },
                {
                    data: "first_name",
                },
                {
                    data: "username",
                },
                {
                    data: "role",
                },
                {
                    data: "division",
                },
                // {
                //     render: function(data, type, row, meta) {
                //         return `<a class="delete" data-id="${row['id']}" href="javascript:void(0)"><i class="ti-trash"></i></a> |
                //             <a class="edit" data-id="${row['id']}" data-nama="${row['nama']}" data-no_hp="${row['no_hp']}" data-designation="${row['designation']}" href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>`

                //     },
                // },
            ],
        });

    }
});