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
                        
                            <div class="input-field inline" style="margin-bottom: 0;width: 30%;">
                                <select name="emp_shift" id="emp_shift" required>
                                    <option value="" disabled selected>เลือกกะ</option>
                                    <option value="กะเช้า">กะเช้า</option>
                                    <option value="กะดึก">กะดึก</option>
                                </select>
                            </div>
                            <div class="input-field inline" style="margin-bottom: 0;width: 95%;">
                                <input type="text" id="autocomplete-input" class="autocomplete" required name="emp_data" data-length="7" variant="outlined" onchange="sendItem(this.value, event)">
                                <label for="autocomplete-input">รหัสพนักงาน</label>
                            </div>
                                
                           <!--   Icon Section   <h6> <b> 1. รอบ 1-2 วันที่ผ่านมาคุณไปรับการฉีดวัคซีนหรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group101" type="radio" value="1" hidden />
                                    <span>ใช่</span>
                                </label>
                            </p> 
                            <p>
                                <label>
                                    <input name="group101" type="radio" value="0" checked />
                                    <span>ไม่ใช่</span>
                                </label>
                            </p>-->
                            
                        </div>
                         
                        <input name="group101" type="radio" value="0" position:fixed; opacity:0; checked />
                        <div class="col s12">
                            <h6> <b> 1.ในรอบ 24 ชั่วโมงที่ผ่านมาคุณมีอาการ เจ็บคอ ไอ มีน้ำมูก ตัวร้อนเป็นไข้ ปวดตามร่างกาย หรือ อุณหภูมิร่างกายเกิน 37.5 องศาเซลเซียสหรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group1" type="radio" value="1"  />
                                    <span>มีอาการ</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group1" type="radio" value="0" checked />
                                    <span>ไม่มีอาการ</span>
                                </label>
                            </p>
                        </div>

                        <div class="col s12">
                            <h6> <b> 2. มีบุคคลในครอบครัวที่พักอาศัยร่วมกันเป็น ผู้ติดเชื้อ หรือไม่
                                </b> </h6>
                            <p>
                                <label>
                                    <input name="group2" type="radio" value="1" />
                                    <span>ใช่</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group2" type="radio" value="0" checked />
                                    <span>ไม่ใช่</span>
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
            <div class="modal-content" style="text-align: center;">
                <h4>กรุณาประสานงานตามรายละเอียด</h4>
                <span class="material-icons prefix" style="color: red; font-size: 5rem;">
                    warning_amber
                </span>
                <h5 class="nopass" style="color: red;">ผลประเมินไม่ผ่าน</h5>
                <h5><b id="date_show1"></b></h5>
                <h5><b id="name_show1"></b></h5>

                <h5 class="nopass">1.ไม่ผ่านการประเมิน ไม่อนุญาตให้เข้าโรงงาน</h5>
                <h5 class="nopass">2.ให้ติดต่อ ฝ่ายบุคคล โทร 033-045-830 ต่อ 3902 หรือ 089-6917-522</h5>
            </div>
            <div class="modal-footer">
                <a href="index.php" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal2" class="modal">
            <div class="modal-content" style="text-align: center;">
                <h4>ผลการประเมิน</h4>
                <span class="material-icons prefix" style="color: green; font-size: 5rem;">
                    check_circle_outline
                </span>
                <h4 class="pass" style="color: green;">ผ่าน</h4>
                <h5><b id="date_show2"></b></h5>
                <h5><b id="name_show2"></b></h5>

            </div>
            <div class="modal-footer">
                <a href="index.php" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
            </div>
        </div>

    </div>
</div>
<br>
<br>
<br>
<br>