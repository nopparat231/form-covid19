<h5 class="header center orange-text"><b>ตรวจสอบข้อมูลพนักงาน</b></h5>

<table class="striped responsive-table centered nowrap" id="example">
    <thead>
        <tr>
            <th>กะ</th>
            <th>รหัสพนักงาน</th>
            <th>ชื่อ - สกุล</th>
            <th>แผนก</th>
            <th>การฉีดวัคซีน</th>
            <th>ข้อ 2</th>
            <th>ข้อ 3</th>
            
            <th>ผลการตรวจ</th>
            <th>วันที่</th>
        </tr>
    </thead>

    <tbody>
        <?php
        require_once('../conn.php');

        $sql = "SELECT * FROM `emp_check_form` INNER JOIN emp ON emp_check_form.emp_check_emp_id=emp.Emp_id ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $row["emp_check_shift"] ?></td>
                    <td><?= $row["emp_check_emp_id"] ?></td>
                    <td><?= $row["Name_Surname"] ?></td>
                    <td><?= $row["Department"] ?></td>
                    <td>
                    <?php
                        if ($row["emp_check_4"] == 1) {
                            echo "<p style='color:red'>ใช่</p>";
                        } else {
                            echo "<p style='color:green'>ไม่ใช่</p>";
                        }
                        ?></td>
                    <td>
                        <?php
                        if ($row["emp_check_2"]== 1) {
                            echo "<p style='color:red'>มีอาการ</p>";
                        } else {
                            echo "<p style='color:green'>ไม่มีอาการ</p>";
                        }
                        ?></td>
                    <td>
                    <?php
                        if ($row["emp_check_3"]== 1) {
                            echo "<p style='color:red'>ใช่</p>";
                        } else {
                            echo "<p style='color:green'>ไม่ใช่</p>";
                        }
                        ?>
                
                </td>
                    
                    <td><?php
                        if ($row["emp_check_status"] == 1) {
                            echo "<p style='color:red'>ไม่ผ่าน</p>";
                        } else {
                            echo "<p style='color:green'>ผ่าน</p>";
                        }
                        ?></td>
                    <td><?= $row["emp_check_time"] ?></td>
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