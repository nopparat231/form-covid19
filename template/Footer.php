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

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.autocomplete');
        var instances = M.Autocomplete.init(elems);
    });

    function sendItem(ele, e) {
        if (e.isTrigger != undefined) {
            console.log('Key: ' + ele.value + ' | Value: ' + $(ele).nextAll('.dropdown-content').find('img').attr('src'));
        }
    }
    $(".autocomplete").each(function() {
        let self = this;
        let inputText = $(this).val();
        $(this).autocomplete();
        $(this).on("input change", function() {
            $.ajax({
                url: 'db.php?key=' + inputText,
                type: 'post',
                cache: false,
                data: {
                    "some": "data"
                },

                success: function(data) {
                    data = JSON.parse(data);
                    $(self).autocomplete("updateData", data /*should be object*/ );


                    //console.log(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
            // setTimeout(function() {
            //     var first_date_year = document.getElementById('autocomplete-input').val;
            //     document.getElementById('emp_name').innerHTML = first_date_year;
            // }, 2000);

        });
    });
</script>

</body>

</html>