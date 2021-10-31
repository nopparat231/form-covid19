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


                    <form action="store.php" id="outsider_check">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">date_range</i>
                            <input type="text" class="datepicker" name="datepicker_date" id="datepicker_date" required>
                            <label for="datepicker_date">วันที่</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">access_time</i>
                            <input type="text" class="timepicker" placeholder="Placeholder" name="timepicker_date" id="timepicker_date" required>
                            <label for="timepicker_date">เวลา</label>
                        </div>


                        <div class="input-field col s6">
                            <input id="first_name" name="first_name" type="text" class="validate" required value="">
                            <label for="first_name">ชื่อ</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="last_name" type="text" class="validate" required value="">
                            <label for="last_name">นามสกุล</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="national_id" name="national_id" type="number" class="validate" required data-length="13">
                            <label for="national_id">หมายเลขบัตรประชาชน</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="phone" name="phone" type="number" class="validate" required data-length="10">
                            <label for="phone">เบอร์โทรติดต่อ</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="agency" name="agency" type="text" class="validate" required>
                            <label for="agency">ชื่อหน่วยงานที่มา</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="location_out" name="location_out" type="text" class="validate" required>
                            <label for="location_out">สถานที่หน่วยงานสถานที่หน่วยงาน (อำเภอ & จังหวัด)</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">access_time</i>
                            <input type="text" class="timepicker" placeholder="Placeholder" name="timepicker_time_in" id="timepicker_time_in" required>
                            <label for="timepicker_time_in">เวลาเข้า</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">access_time</i>
                            <input type="text" class="timepicker" placeholder="Placeholder" name="timepicker_time_out" id="timepicker_time_out" required>
                            <label for="timepicker_time_out">เวลาออก</label>
                        </div>
                        
                        <div class="input-field col s6">
                            <input id="contact" name="contact" type="text" class="validate" required>
                            <label for="contact">ติดต่อหน่วยงาน/ผู้ใด</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="location_in" name="location_in" type="text" class="validate" required>
                            <label for="location_in">พื้นที่เข้ามาติดต่อ/ปฏิบัติงาน</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="contact_matter" name="contact_matter" class="materialize-textarea" required></textarea>
                            <label for="contact_matter">เรื่องที่มาติดต่อ</label>
                        </div>


                        <div class="col s12">
                            <h6> <b class="flow-text"> 1. ท่านมีอาการไข้ มีน้ำมูก ไอ เจ็บคอ หรือหายใจเหนื่อยหอบ และมีบุคคลที่พักอาศัยในบ้าน หรือ หอพัก ร่วมกับผู้ติดเชื้อ หรือมีอาการป่วยที่สงสัยว่าติดเชื้อหรือไม่ </b> </h6>
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
                            <h6> <b class="flow-text"> 2. ท่านเป็นบุคคลที่อยู่ในระหว่างการกักตัวเนื่องจากเป็นกลุ่มเสี่ยงเชื้อโควิด 19 หรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group2" type="radio" value="1"  />
                                    <span>ใช่</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group2" type="radio" value="0" checked/>
                                    <span>ไม่ใช่</span>
                                </label>
                            </p>
                        </div>

                        <div class="col s12">
                            <h6> <b class="flow-text"> 3. ท่านได้รับการฉีดวัคซีนแล้วหรือไม่ ถ้าใช่ กรุณากรอกวันที่ที่ได้รับวัคซีนล่าสุด </b> </h6>
                            <p>
                                <label>
                                    <input name="group3" type="radio" value="0" id="group3id1" />
                                    <span>ใช่</span>
                                    <div class="input-field col s12" id="select_v" style="display: none;">
                                        <input id="select_vcc" name="select_vcc" type="text" class="validate">
                                        <label for="select_vcc">กรุณากรอกวันที่ฉีดวัคซีน</label>
                                    </div>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group3" type="radio" value="1" id="group3id2" checked />
                                    <span>ไม่ใช่</span>
                                </label>
                            </p>
                        </div>
                        <div class="row">
                            <label>อัพโหลดเอกสารแนบ เอกสารการฉีดวัคซีนจากโรงพยาบาลหรือหมอพร้อม</label>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Browse</span>
                                    <input type="file" name="sample_image" id="sample_image" />
                                </div>

                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="fileupload_name" type="text" placeholder="Upload multiple files" />
                                </div>
                            </div>
                            <input class="text-center" id="uploaded_image" name="uploaded_image" hidden>
                        </div>

                        <div class="col s12">
                            <h6> <b class="flow-text"> 4. ผลตรวจ ATK / Rapid test ของท่าน พร้อม แนบรูปผลการตรวจ ATK ( ) ในรอบ 7 วันที่ผ่านมา </b> </h6>
                            <p>
                                <label>
                                    <input name="group4" type="radio" value="0" checked/>
                                    <span>Nagative(ผลลบ ไม่พบเชื้อ)</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group4" type="radio" value="1"  />
                                    <span>Positive(ผลบวก พบเชื้อ)</span>
                                </label>
                            </p>
                        </div>

                        <div class="row">
                            <label>อัพโหลดเอกสารแนบATK</label>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Browse</span>
                                    <input type="file" name="sample_image1" id="sample_image1" />
                                </div>

                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="fileupload_name1" type="text" placeholder="Upload multiple files" />
                                </div>
                            </div>
                            <input class="text-center" id="uploaded_image1" name="uploaded_image1" hidden>
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

                        <button type="submit" id="submit" class="waves-effect waves-light btn-large">ส่งข้อมูล</button>

                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal11" class="modal">
            <div class="modal-content center-align">
                <h4>แจ้งผลการประเมิน</h4>
                <span class="material-icons prefix" style="color: green; font-size: 5rem;">
                    check_circle_outline
                </span>
                <h5 style="color: green;">ผลประเมินผ่าน</h5>

                <h5>
                    <p id="name_report1"></p>
                </h5>
                <h5>
                    <p id="date_report1"></p>
                </h5>
               
            </div>
            <div class="modal-footer">
                <a href="index.php" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
            </div>
        </div>

        <div id="modal22" class="modal">
            <div class="modal-content center-align">
                <h4>แจ้งผลการประเมิน</h4>
                <span class="material-icons prefix" style="color: red; font-size: 5rem;">
                    warning_amber
                </span>
                <h5 style="color: red;">ผลประเมินไม่ผ่าน</h5>

                <h5>
                    <p id="name_report2"></p>
                </h5>
                <h5>
                    <p id="date_report2"></p>
                </h5>
               
            </div>
            <div class="modal-footer">
                <a href="index.php" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
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
        //var timepicker_time_in = document.getElementById("timepicker_time_in").value;
        //var timepicker_time_out = document.getElementById("timepicker_time_out").value;
        
        document.getElementById("name_report").innerHTML = first_name + "  " + last_name;

        document.getElementById("date_report").innerHTML = "วันที่ " + datepicker_date + "  เวลา " + timepicker_date;
    }
</script>


<br>
<br>
<br>
<br>