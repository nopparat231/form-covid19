<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>


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


                    <form action="store.php" id="outsider_check"  >

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
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["ส่วนบุคคล","บริษัทยาคูล","NNR","CKP","โซดิ","3M","TSU","Agilent","ปทุม","สเปเชียล","Fedex","ครินสแตท","DPX","มิซูมิ",
"ธนากุล","รวมชัย","NK.","ISC","WMS","หจก ดวงตะวัน","ไห่หยาง","สยามโกเด้น","ดีเอชแอล","LSA PrintPack Alliance Co.,Ltd.",
"บจก.ไทยแพ็คโซลูชั่น","บุญ​รอด​รีไซเคิล​","TRIPLE I LOGISTICS PCL","Saidai communication.","Rentokil",
"TDE​","โอจิ","Hanna","ปินันชิน","TTL","UPS","เบตเตอร์","เทคเคม","จิตเจริญ","DHL","BIC","Sun108","วอเทอร์เน็ท","บ.เนริ์ดซิง",
"โมซาร์ท พย","Covermat Co.,Ltd.","Nitto","โคเซอร์แมท","NT","เฟสเอ็ก","บมจ.สหมิตรเครื่องกล​","PST Clothing",
"FreeDom Solution.","ยามาโตะ","SJ","SSA","ทีดีอี","PSV","AS shipping","ไทยน้ำทิพย์","ปานส่วนทิพย์",
"SAS","AB9","เอเวอรี่","NTT Solution Thailand","Hilltech","PSC","SGS","SJN",
"เป๊บซี่","Lyreco","Rotometrics","เอ็น เค","โพรเทคทีพ","สแนกทรูโก","UCI","NP Interpart",
"ATT","TSG","เฟรนด์ชิพ","RT supply","WU.C.I","ส่งเรซิ่น","อัลฟ่าไดมอนด์","ชีว่า","สมัครงาน","BWT",
"บ.วีอาร์เกรทแมชชินนารี่ จำกัด","กิจเจริญ","ไอยรา","NP","บีทาเก้น","บมจ.สหมิตรเครื่องกล","สปีดมิลด์","เสรีชัย","เมรอค",
"บริษัท เวิลด์ ไฮเทค มาร์เก็ตติ้ง จำกัด","หจก.พิมพ์ศรีเทรดดิ้ง","ชัยปกรณ์​ภัณฑ์​","เฟรนชิพ","พศิน เอ็นจิเนียริ่ง","สวน",
"บจก.เนอร์สซิ่ง เร็นเดอริ่ง","PwC Thailand","Micap","ร้านเต็นท์ชลบุรี","เป๊ปซี่","รพ อินเตอร์เมด","RT",
"เร็นโทคิล","ยูซีไอ","สหมิตร","NSR","ยูชีไอ","อนันต์โชคแมทชีนเนอรี่","เทอร์มอลแพค","ซีรัสท์"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("agency"), countries);
</script>



<br>
<br>
<br>
<br>