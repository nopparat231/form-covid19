<!--  Scripts-->
<script type="text/javascript" src="../lib/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../lib/js/materialize.min.js"></script>
<script type="text/javascript" src="../lib/DataTables/DataTables-1.11.0/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [
                [7, "desc"]
            ]
        });
    });
</script>

</body>

</html>