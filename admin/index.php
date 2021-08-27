<?php
//error_reporting(0);
require_once('./Header.php');

?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h5 class="header center orange-text"><b>ตรวจสอบข้อมูล</b></h5>
        <div class="col center">
            <a href="?insider" class="btn waves-effect waves-light orange">สำหรับพนักงาน</a>
            <a href="?outsider" class="btn waves-effect waves-light teal">สำหรับบุคคลภายนอก</a>
        </div>
        <div class="row center">

            <?php

            if (isset($_GET['outsider'])) {
                include('outsider.php');
            } else {
                include('insider.php');
            }

            ?>
            
        </div>

    </div>
</div>

<?php

require_once('./Footer.php');
