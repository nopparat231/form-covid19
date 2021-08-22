<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">

            <img src="./lib/imgs/logo.png" width="100%">

        </div>
        <h5>*ข้อมูลผู้มาติดต่อ</h5>
        <div class="row">
            <div class="col s12">

                <div class="row">


                    <form action="#">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">date_range</i>
                            <input type="text" class="datepicker" id="datepicker_date" required>
                            <label for="datepicker_date">วันที่</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">access_time</i>
                            <input type="text" class="timepicker" id="timepicker_date" required>
                            <label for="timepicker_date">เวลา</label>
                        </div>


                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate" required value="">
                            <label for="first_name">ชื่อ</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" required value="">
                            <label for="last_name">นามสกุล</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="national_id" type="number" class="validate" data-length="13">
                            <label for="national_id">หมายเลขบัตรประชาชน</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="phone" type="number" class="validate" data-length="10">
                            <label for="phone">เบอร์โทรติดต่อ</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="agency" type="text" class="validate">
                            <label for="agency">ชื่อหน่วยงานที่มา</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="location_out" type="text" class="validate">
                            <label for="location_out">สถานที่หน่วยงาน</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="contact" type="text" class="validate">
                            <label for="contact">ติดต่อหน่วยงาน/ผู้ใด</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="location_in" type="text" class="validate">
                            <label for="location_in">พื้นที่เข้ามาติดต่อ/ปฏิบัติงาน</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="contact_matter" class="materialize-textarea"></textarea>
                            <label for="contact_matter">เรื่องที่มาติดต่อ</label>
                        </div>


                        <div class="col s12">
                            <h6> <b class="flow-text"> 1. ท่านมีอาการไข้ มีน้ำมูก ไอ เจ็บคอ หรือหายใจเหนื่อยหอบ และมีบุคคลที่พักอาศัยในบ้าน หรือ หอพัก ร่วมกับผู้ติดเชื้อ หรือมีอาการป่วยที่สงสัยว่าติดเชื้อหรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group1" type="radio" checked />
                                    <span>มีอาการ</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group1" type="radio" />
                                    <span>ไม่มีอาการ</span>
                                </label>
                            </p>
                        </div>

                        <div class="col s12">
                            <h6> <b class="flow-text"> 2. ท่านเป็นบุคคลที่อยู่ในระหว่างการกักตัวเนื่องจากเป็นกลุ่มเสี่ยงเชื้อโควิด 19 หรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group2" type="radio" checked />
                                    <span>ใช่</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group2" type="radio" />
                                    <span>ไม่ใช่</span>
                                </label>
                            </p>
                        </div>

                        <div class="col s12">
                            <h6> <b class="flow-text"> 3. ท่านได้รับการฉีดวัคซีนแล้วหรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group3" type="radio" checked />
                                    <span>ใช่</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group3" type="radio" />
                                    <span>ไม่ใช่</span>
                                </label>
                            </p>
                        </div>

                        <div class="col s12">
                            <h6> <b class="flow-text"> 4. ผลตรวจ ATK / Rapid test ของท่าน พร้อม แนบรูปผลการตรวจ ATK ( ) ในรอบ 7 วันที่ผ่านมา </b> </h6>
                            <p>
                                <label>
                                    <input name="group4" type="radio" />
                                    <span>Nagative</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group4" type="radio" checked />
                                    <span>Positive</span>
                                </label>
                            </p>
                        </div>

                        <div class="row">
                            <label>อัพโหลดเอกสารแนบ</label>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Browse</span>
                                    <input type="file" multiple />
                                </div>

                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload multiple files" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <p>
                                <b>หมายเหตุ : </b><br>
                                <label>
                                    1. หากท่านปกปิดข้อมูลข้างต้น และเป็นต้นเหตุของการแพร่กระจายโควิด 19 จนกระทบต่อการผลิต คุณภาพ และการส่งมอบ มีปัญหาต่อลูกค้า หรือกระทบต่อสุขภาพพนักงานของบริษัทฯ 
                                    บริษัทฯ จะพิจารณาทบทวนการดำเนินธุรกิจกับบริษัทหรือหน่วยงานของท่าน รวมถึงความเสียหายดังกล่าวบริษัทฯ จะดำเนินการทางกฎหมายต่อไป
                                    <br>
                                    2. ไม่อนุญาติให้เข้ามาโรงงาน หากมีอาการตามข้อ 1 และเป็นบุคคลที่อยู่ระหว่างกักตัว
                                    <br>
                                    3. ไม่อนุญาติให้เข้ามาโรงงาน หากผลตรวจ ATK เป็นบวก-มีเชื้อ
                                    <br>
                                    4. ทำแบบสำรวจ ก่อนล่วงหน้าอย่างน้อย 1 วัน
                                    ปรินท์ หรือ แคบหน้าจอผลการทำแบบประเมิน เพื่อแสดง ก่อนเข้าบริษัท
                                </label>

                            </p>
                        </div>

                        <a class="waves-effect waves-light btn-large modal-trigger" onclick="myFunction()" href="#modal1">ส่งข้อมูล</a>

                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content center-align">
                <h4>แจ้งผลการประเมิน</h4>
                <h5>
                    <p id="name_report"></p>
                </h5>
                <h5>ทำแบบประเมิน
                    <p id="date_report"></p>
                </h5>
                <h5 style="color: green;">ผลประเมินผ่าน</h5>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
            </div>
        </div>

    </div>
</div>

<script>
    function myFunction() {
        var first_name = document.getElementById("first_name").value;
        var last_name = document.getElementById("last_name").value;

        var datepicker_date = document.getElementById("datepicker_date").value;
        var timepicker_date = document.getElementById("timepicker_date").value;

        document.getElementById("name_report").innerHTML = first_name + "  " + last_name;

        document.getElementById("date_report").innerHTML = "วันที่ " + datepicker_date + "  เวลา " + timepicker_date;


    }
</script>


<br>
<br>
<br>
<br>