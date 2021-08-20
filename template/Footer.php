<!--  Scripts-->
<script type="text/javascript" src="lib/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="lib/js/materialize.min.js"></script>
<script type="text/javascript" src="lib/js/init.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.modal');
                var instances = M.Modal.init(elems);
                $('.modal').modal({
                        dismissible: false,
                    });
                });
</script>

</body>

</html>