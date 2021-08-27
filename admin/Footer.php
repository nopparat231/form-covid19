<!--  Scripts-->
<script type="text/javascript" src="../lib/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../lib/js/materialize.min.js"></script>
<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/jszip.min.js"></script>
<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/vfs_fonts.js"></script>
<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [
                [7, "desc"]
            ],
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });
        $('#exampleout').DataTable({
            "order": [
                [0, "desc"]
            ],
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ],
            scrollY: "600px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                left: 2
            }
        });
    });
</script>

</body>

</html>