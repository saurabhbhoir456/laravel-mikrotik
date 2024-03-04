<div id="copyright text-right">Developed by Johan Els</div>

<script>
    ( function($) {
        $(document).ready(function () {
            // Setup add a text input to each footer cell
            $('#table_id tfoot th').each(function (i) {
                var title = $('#table_id thead th').eq($(this).index()).text();
                $(this).html('<input type="text" data-index="' + i + '" />');
            });

            // The table
            var table = $('#table_id').DataTable({
                lengthChange: false,
                buttons: [
                    'copy', 'csv', 'pdf', 'colvis'
                ],
                pageLength: 50
            });

            table.buttons().container()
                .appendTo( '#table_id_wrapper .col-md-6:eq(0)' );

            // Filter event handler
            $(table.table().container()).on('keyup', 'tfoot input', function () {
                table
                    .column($(this).data('index'))
                    .search(this.value)
                    .draw();
            });
        });
    }) ( jQuery );
</script>

<script src="{{ mix('/js/app.js') }}"></script>
