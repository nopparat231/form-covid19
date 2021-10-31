<style>
    th,
    td {
        white-space: nowrap;
    }

    div.dataTables_wrapper {
        width: 1200px;
        margin: 0 auto;
    }
    #exampleout {
        overflow-x: scroll;
    }
</style>
<h5 class="header center orange-text"><b>ตรวจสอบข้อมูลบุคคลภายนอก</b></h5>
<table class="stripe row-border order-colum" id="exampleout" style="width:100%">
    <thead>
        <tr>
            <th>วันที่ เวลา</th>
            <th>ชื่อ - สกุล</th>
            <th>หมายเลขบัตรประชาชน</th>
            <th>เบอร์โทรติดต่อ</th>
            <th>ชื่อหน่วยงานที่มา</th>
            <th>สถานที่หน่วยงาน</th>
            <th>ติดต่อหน่วยงาน/ผู้ใด</th>
            <th>พื้นที่เข้ามาติดต่อ/ปฏิบัติงาน</th>
            <th>เรื่องที่มาติดต่อ</th>
            <th>Time in</th>
            <th>Time out</th>
            <th>มีอาการไข้ มีน้ำมูก ไอ เจ็บคอ</th>
            <th>อยู่ในระหว่างการกักตัว</th>
            <th>รับการฉีดวัคซีนแล้ว</th>
            <th>วันที่ฉีดวัคซีน</th>
            <th>ผลตรวจ ATK / Rapid test</th>
            <th>อัพโหลดเอกสารแนบ1</th>
            <th>อัพโหลดเอกสารแนบ2</th>
            <th>ผลการตรวจ</th>
            <th>วันที่</th>
        </tr>
    </thead>

    <tbody>
        <?php
        require_once('../conn.php');
        $sql = "SELECT * FROM `outsider_check_form`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $row["outsider_check_datepicker_date"] . "  " . $row["outsider_check_timepicker_date"] ?></td>
                    <td><?= $row["outsider_check_first_name"] . "  " . $row["outsider_check_last_name"] ?></td>
                    <td><?= $row["outsider_check_national_id"] ?></td>
                    <td><?= $row["outsider_check_national_phone"] ?></td>
                    <td><?= $row["outsider_check_agency"] ?></td>
                    <td><?= $row["outsider_check_location_out"] ?></td>
                    <td><?= $row["outsider_check_contact"] ?></td>
                    <td><?= $row["outsider_check_location_in"] ?></td>
                    <td><?= $row["outsider_check_contact_matter"] ?></td>
                    <td><?= $row["outsider_check_timepicker_time_in"] ?></td>
                    <td><?= $row["outsider_check_timepicker_time_out"] ?></td>
                    <td><?= $row["outsider_check_group1"] ?></td>
                    <td><?= $row["outsider_check_group2"] ?></td>
                    <td><?= $row["outsider_check_group3"] ?></td>
                    <td><?= $row["outsider_check_vcc"] ?></td>
                    <td><?= $row["outsider_check_group4"] ?></td>
                    <td>
                        <?php
                        if ($row["outsider_check_file"] <> "") {
                        ?>
                            <a href="../upload/<?= $row["outsider_check_file"] ?>" download><?= $row["outsider_check_file"] ?></a>
                        <?php
                        } else {
                            echo "<p>ไม่มีไฟล์</p>";
                        }
                        ?>
                    </td><td>
                        <?php
                        if ($row["outsider_check_file"] <> "") {
                        ?>
                            <a href="../upload/<?= $row["outsider_check_file1"] ?>" download><?= $row["outsider_check_file1"] ?></a>
                        <?php
                        } else {
                            echo "<p>ไม่มีไฟล์</p>";
                        }
                        ?>
                    </td>
                    <td><?php
                        if ($row["outsider_check_status"] == 1) {
                            echo "<p style='color:red'>ไม่ผ่าน</p>";
                        } else {
                            echo "<p style='color:green'>ผ่าน</p>";
                        }
                        ?></td>
                    <td><?= $row["outsider_check_time"] ?></td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>



    </tbody>
</table>