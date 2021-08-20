<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">

            <img src="./lib/imgs/logo.png" width="100%">

        </div>

        <div class="row">
            <div class="col s12">
                <div class="row">

                    <form action="#">

                        <div class="col s12">
                            <b>1.</b>
                            <div class="input-field inline">
                                <input type="number" id="autocomplete-input" class="autocomplete validate" maxlength="7">
                                <label for="autocomplete-input">รหัสพนักงาน</label>
                            </div>
                        </div>


                        <div class="col s12">
                            <h6> <b> 2. ในรอบ 24 ชั่วโมงที่ผ่านมา คุณมีอาการเจ็บคอ ไอ มีน้ำมูก ตัวร้อนเป็นไข้หรือ ปวดตามร่างกายหรือไม่ ว่าติดเชื้อหรือไม่ </b> </h6>
                            <p>
                                <label>
                                    <input name="group1" type="radio" checked/>
                                    <span>มีอาการ</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group1" type="radio"  />
                                    <span>ไม่มีอาการ</span>
                                </label>
                            </p>
                        </div>

                        <div class="col s12">
                            <h6> <b> 3. มีบุคคลในครอบครัวที่พักอาศัยร่วมกัน เป็นผู้ติดเชื้อ หรือมีอาการป่วยที่สงสัย
                                </b> </h6>
                            <p>
                                <label>
                                    <input name="group2" type="radio" />
                                    <span>มีอาการ</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="group2" type="radio" checked />
                                    <span>ไม่มีอาการ</span>
                                </label>
                            </p>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">ส่งข้อมูล</a>
                    </form>

                </div>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>กรุณาประสานงานตามรายละเอียด</h4>
                <h5 style="color: red;">ผลประเมินไม่ผ่าน</h5>
                <h5>1. ให้แจ้งหัวหน้างาน และหยุดลาป่วย 2 วัน</h5>
                <h5>2. ทางบริษัทจะติดต่อประสานงานไปเป็นระยะ</h5>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat"><b>ตกลง</b></a>
            </div>
        </div>

    </div>
</div>