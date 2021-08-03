<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ลงทะเบียนขอรับใบเสร็จ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ncss.css">
    <link rel="stylesheet" href="css/ra.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <script src="js/njs.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php date_default_timezone_set('Asia/Bangkok'); ?>
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }

        .adds {
            font-size: 0.7em;
        }

        .enf {
            font-size: 0.7em;
        }

    </style>
</head>

<body>

    <!-- Navbar-->
    <!-- <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="images/6.jpg" alt="logo" width="130" height="80">
                </a>
            </div>
        </nav>
    </header> -->


    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <!-- <img src="images/wi.gif" alt="" class="img-fluid mb-3 d-none d-md-block"> -->
                <img src="images/6.jpg" alt="logo" width="130" height="80" class="img-fluid mb-3 d-md-block text-center">
                <h2>ลงทะเบียนขอรับใบเสร็จ</h2>
                <p class="font-italic text-muted mb-0 enf">Chaopraya Abhaiphubejhr Receipt Registration Form</p>
                <hr>
                <p class="font-italic text-muted adds">
                    เลขที่ 32/7 หมู่ 12 ถนนปราจีนอนุสรณ์ ตำบลท่างาม จังหวัดปราจีนบุรี 25000<br>
                    โทร.037-211088
                </p>
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="#">
                    <div class="row">

                        <!--ชื่อ - สกุล , ชื่อบริษัท -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="name_send" type="text" name="name_send" title="" placeholder="ชื่อ - สกุล , ชื่อบริษัท" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-users text-muted"></i>
                                </span>
                            </div>
                            <input id="user_count" type="text" name="user_count" title="" placeholder=" เลขประจำตัวประชาชน " onKeyPress="CheckNumuser()" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- หน่วยงาน -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-university text-muted"></i>
                                </span>
                            </div>
                            <input id="dep" type="text" name="dep" placeholder="ที่อยู่" title="ร" class="form-control bg-white border-left-0 border-md">
                        </div>






<!--  |||||||||||||||||||||||||||||||-->


           

<!--  |||||||||||||||||||||||||||||||-->





                        <!-- เบอร์โทรศํพท์ Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-volume-control-phone text-muted"></i>
                                </span>
                            </div>
                            <input id="phone" type="text" name="phone" placeholder="เบอร์โทรศํพท์" onKeyPress="CheckNum()" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-users text-muted"></i>
                                </span>
                            </div>
                            <input id="user_count" type="text" name="user_count" title="" placeholder=" จำนวนเงินที่โอน " onKeyPress="CheckNumuser()" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- WIFI Name -->
                        <!-- <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-wifi text-muted"></i>
                                </span>
                            </div>
                            <input id="wifi_name" type="text" name="wifi_name" placeholder="" onclick="checkwifi()" value="" readonly class="form-control bg-white border-left-0 border-md">
                        </div> -->

                        <!--กลุ่มผู้ใช้งาน -->
                        <div class="input-group col-lg-12    mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-list text-muted"></i>
                                </span>
                            </div>
                            <select id="pay" name="pay" class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="0" selected>วัตถุประสงค์</option>
                                <option value="1">ก่อสร้างห้องความดันลบฯ (ICU Covid Negative Pressure)</option>
                                <option value="2">วัสดุและครุภัณฑ์ทางการแพทย์ (สามารถระบุเพิ่มเติมได้)</option>
                                <!-- <option value="3">อื่น ๆ</option> -->
                            </select>
                        </div>
                        <!-- หน่วยงาน -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-rss text-muted"></i>
                                </span>
                            </div>
                            <input id="cc" type="text" name="cc" placeholder="วัตถุประสงค์ อื่น ๆ ระบุ " class="form-control bg-white border-left-0 border-md">
                        </div>



                        <!-- ลักษณะการใช้งาน -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-list-ul text-muted"></i>
                                </span>
                            </div>
                            <select id="ment" name="ment" class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="0" selected>ธนาคารที่โอน </option>
                                <option value="1">กรุงไทย </option>
                                <option value="2">ไทยพาณิชย์</option>

                            </select>
                        </div>
                        <img src="images/logo-krungthai.png" alt="" width="60px" hight="20px">
                        &nbsp;&nbsp;&nbsp;
                        <img src="images/logo-scb.png" alt="" width="60px" hight="20px">

                        <!-- Phone Number -->
                        <!-- <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone-square text-muted"></i>
                                    <span></span>
                                </span>
                            </div>
                            <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                <option value="">+12</option>
                                <option value="">+10</option>
                                <option value="">+15</option>
                                <option value="">+18</option>
                            </select>
                            <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                        </div> -->


                        <!--date s -->
                        <div class="input-group col-lg-6 mb-4" title="">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-list-ol text-muted"></i>
                                </span>
                            </div>
                            <input id="startdate" type="date" name="startdate" placeholder="วันที่โอน" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- date e -->
                        <div class="input-group col-lg-6 mb-4" title="">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-list-ol text-muted"></i>
                                </span>
                            </div>
                            <input id="enddate" type="time" name="enddate" placeholder="เวลาที่โอน" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password -->
                        <!-- <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                        </div> -->

                        <!-- Password Confirmation -->
                        <!-- <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                        </div> -->
                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a href="#" class="btn btn-primary btn-block py-2" type="submit" id="submit" name="submit">
                                <span class="font-weight-bold">ส่งข้อมูล</span>
                            </a>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <!-- <span class="px-2 small text-muted font-weight-bold text-muted">OR</span> -->
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- Social Login -->
                        <!-- <div class="form-group col-lg-12 mx-auto">
                            <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                                <i class="fa fa-facebook-f mr-2"></i>
                                <span class="font-weight-bold">Continue with Facebook</span>
                            </a>
                            <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">
                                <i class="fa fa-twitter mr-2"></i>
                                <span class="font-weight-bold">Continue with Twitter</span>
                            </a>
                        </div> -->

                        <!-- Help Center -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Help Information Center ? <a href="https://www.cpa.go.th" target="_blank" class="text-primary ml-2">Information</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script language="javascript">
        // เช็ค form
        function CheckNum() {
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.returnValue = false;
                swal("เฉพาะตัวเลขเท่านั้น!", "ระบุเบอร์โทรศัพท์ของท่าน มือถือ หรือ เบอร์ภายใน !");
            }
        }

        function CheckNumuser() {
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.returnValue = false;
                swal("เฉพาะตัวเลขเท่านั้น!", "ระบุจำนวนผู้เข้าร่วมใช้บริการ WI-FI เป็นตัวเลขเท่านั้น ");
            }
        }

        function checkwifi() {
            swal(" ABH GUEST ", "สัญญาณ WI-FI นี้เท่านั้น ");
        }

        // บันทึก
        $(document).ready(function() {
            $("#submit").click(function() {

                var name_send = $("#name_send").val();
                var dep = $("#dep").val();
                var phone = $("#phone").val();
                var cc = $("#cc").val();
                var pay = $("#pay").val();
                var ment = $("#ment").val();
                var startdate = $("#startdate").val();
                var wifi_name = $("#wifi_name").val();
                var user_count = $("#user_count").val();
                var enddate = $("#enddate").val();

                var dataString = 'name_send=' + name_send + '&dep=' + dep + '&phone=' + phone + '&cc=' + cc + '&pay=' + pay + '&ment=' + ment + '&startdate=' + startdate + '&wifi_name=' + wifi_name + '&user_count=' + user_count + '&enddate=' + enddate;

                if (name_send == '') {
                    swal("คุณไม่ได้กรอกข้อมูล!", "ชื่อ นามสกุล , ชื่อบริษัท");
                    return false;
                }
                if (user_count == '') {
                    swal("กรุณาระบุ!", "จำนวนผู้ใช้งาน เป็นตัวเลข");
                    return false;
                }
                if (dep == '') {
                    swal("คุณไม่ได้กรอกข้อมูล!", "หน่วยงาน ผู้ขอใช้");
                    return false;
                }
                if (phone == '') {
                    swal("คุณไม่ได้กรอกข้อมูล!", "เบอร์โทรศํพท์ ผู้ขอใช้");
                    return false;
                }
                if (pay == '0') {
                    swal("คุณไม่ได้เลือกข้อมูล!", "กลุ่มผู้ใช้งาน");
                    return false;
                }
                if (ment == '0') {
                    swal("คุณไม่ได้เลือกข้อมูล!", "ลักษณะการใช้งาน");
                    return false;
                }
                if (cc == '') {
                    swal("คุณไม่ได้กรอกข้อมูล!", "วัตถุประสงค์ที่ขอใช้ WIFI");
                    return false;
                }
                if (startdate == '') {
                    swal("กรุณาตรวจสอบ!", "วันที่ขอใช้บริการไม่ถูกต้อง");
                    return false;
                }
                if (enddate == '') {
                    swal("กรุณาตรวจสอบ!", "วันที่ขอใช้บริการไม่ถูกต้อง");
                    return false;
                } else {
                    $.ajax({
                        type: "POST",
                        url: "save.php",
                        data: dataString,
                        cache: false,
                        success: function(result) {
                            console.log(result);
                            if (result.statusCode = 200) {
                                swal("Success", "บันทึกข้อมูลสำเร็จ");
                                window.location = "http://172.16.0.251/";

                            } else {
                                swal("Error", "ไม่สามารถรายการได้");
                            }
                        }
                    });
                }
                return false;
            });
        });
    </script>
</body>

</html>