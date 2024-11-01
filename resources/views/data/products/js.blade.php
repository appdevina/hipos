<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {
        console.log("halo dari js.blade");

        const is_dt_products = document.getElementById('dt_products');

        if(is_dt_products){
            dt_products();
    
            function dt_products() {
                $("#dt_products").DataTable({
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
                            "/products/list",
                    },
                    columns: [
                        {
                            data: "name",
                        },
                        {
                            data: "product_code",
                        },
                        {
                            data: "price",
                        },
                        {
                            data: "stock",
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
        }

        $('#product-search').autocomplete({
            source: "{{ route('product.search') }}",
            minLength: 2,
            select: function(event, ui) {
                // Fetch product details based on selection
                $.ajax({
                    url: "{{ route('product.search') }}",
                    data: { term: ui.item.name },
                    success: function(data) {
                        // Clear existing table rows
                        $('#product-table tbody').empty();

                        // Append product details to the table
                        $.each(data, function(index, product) {
                            $('#product-table tbody').append(`
                                <tr>
                                    <td>${product.name}</td>
                                    <td>${product.product_code}</td>
                                    <td>${product.price}</td>
                                    <td>${product.stock}</td>
                                </tr>
                            `);
                        });
                    }
                });
            }
        });
    });
</script>