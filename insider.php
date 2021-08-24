<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">

            <img src="./lib/imgs/logo.png" width="100%">

        </div>

        <div class="row">
            <div class="col s12">
                <div class="row">

                    <form action="store.php" id="emp_check">

                        <div class="col s12">
                            <b>1.</b>
                            <div class="input-field inline" style="margin-bottom: 0;width: 90%;">
                                <input type="text" id="autocomplete-input" class="autocomplete" name="emp_data" data-length="7" variant="outlined" onchange="sendItem(this.value, event)">
                                <label for="autocomplete-input">รหัสพนักงาน</label>
                            </div>
                        </div>


                        <div class="col s12">
                            <h6> <b> 2. ในรอบ 24 ชั่วโมงที่ผ่านมา คุณมีอาการเจ็บคอ ไอ มีน้ำมูก ตัวร้อนเป็นไข้หรือ ปวดตามร่างกายหรือไม่ ว่าติดเชื้อหรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group1" type="radio" value="1" checked />
                                    <span>มีอาการ</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group1" type="radio" value="0" />
                                    <span>ไม่มีอาการ</span>
                                </label>
                            </p>
                        </div>

                        <div class="col s12">
                            <h6> <b> 3. มีบุคคลในครอบครัวที่พักอาศัยร่วมกัน เป็นผู้ติดเชื้อ หรือมีอาการป่วยที่สงสัย
                                </b> </h6>
                            <p>
                                <label>
                                    <input name="group2" type="radio" value="1" />
                                    <span>มีอาการ</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group2" type="radio" value="0" checked />
                                    <span>ไม่มีอาการ</span>
                                </label>
                            </p>
                        </div>

                        <div class="row">
                        </div>

                        <button type="submit" id="submit" class="waves-effect waves-light btn-large">ส่งข้อมูล</button>
                        <!-- <input type="submit"> -->
                        <!-- <a type="submit" class="waves-effect waves-light btn-large modal-trigger" href="#2">ส่งข้อมูล</a> -->
                        <br>
                        
                    </form>
                    <div id="result"></div>
                   

                </div>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>กรุณาประสานงานตามรายละเอียด</h4>
                <h5 class="nopass" style="color: red;">ผลประเมินไม่ผ่าน</h5>
                <h5 class="nopass">1. ให้แจ้งหัวหน้างาน และหยุดลาป่วย 2 วัน</h5>
                <h5 class="nopass">2. ทางบริษัทจะติดต่อประสานงานไปเป็นระยะ</h5>
            </div>
            <div class="modal-footer">
                <a href="index.php" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4>ผลการประเมิน</h4>
                <h5 class="pass" style="color: green;">ผ่าน</h5>
            </div>
            <div class="modal-footer">
                <a href="index.php" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
            </div>
        </div>

    </div>
</div>
// THis is comment
 <!--   Icon Section   -->

<br>
<br>
<br>
<br>