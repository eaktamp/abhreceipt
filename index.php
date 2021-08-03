<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ลงทะเบียนขอรับใบเสร็จ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ncss.css">
    <link rel="stylesheet" href="css/ra.css">
    <link rel="stylesheet" href="css/upload.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <script src="js/njs.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/css/uikit.css">
    <link rel="stylesheet" href="./js/jquery.Thailand.js/dist/jquery.Thailand.min.css">

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

        #thumbnail img {
            border-radius: 25px;
            width: 250px;
            height: 250px;
            object-fit: cover;
        }
    </style>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-33058582-1', 'auto', {
            'name': 'Main'
        });
        ga('Main.send', 'event', 'jquery.Thailand.js', 'GitHub', 'Visit');
    </script>
</head>

<body>
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
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
                <form action="#" method="POST" id="demo1" enctype="multipart/form-data" class="demo" style="display:none;" autocomplete="off" uk-grid>
                    <div class="row">
                        <!-- -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-users text-muted"></i>
                                </span>
                            </div>
                            <input id="company_name" type="text" name="company_name" title="" placeholder="ชื่อ - สกุล , ชื่อบริษัท" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!--   -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-id-card-o text-muted"></i>
                                </span>
                            </div>
                            <input id="id_card" type="text" maxlength='13' name="id_card" title="" placeholder=" เลขประจำตัวประชาชน " onKeyPress="CheckNum()" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- -->
                        <!--   -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-mobile text-muted"></i>
                                </span>
                            </div>
                            <input id="phone" type="text" name="phone" maxlength='10' placeholder="เบอร์โทรศํพท์" maxlength="13" onKeyPress="CheckNumuser()" class="form-control bg-white border-left-0 border-md" required>
                        </div>



                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-home"></i>
                                </span>
                            </div>
                            <input id="addr" type="text" name="addr" title="" placeholder="ที่อยู่ บ้านเลขที่ หมู่บ้านตึก " class="form-control bg-white border-left-0 border-md" required>
                        </div>


                        <!--  -->

                        <div id="loader">
                            <div uk-spinner></div> รอสักครู่ กำลังโหลดฐานข้อมูล...
                        </div>


                        <div class="input-group col-lg-6 mb-4">
                            <input id="district" type="text" name="district" placeholder="ตำบล / แขวง" class="form-control bg-white border-md" required>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <input id="amphoe" type="text" name="amphoe" placeholder="อำเภอ / เขต" class="form-control bg-white border-md" required>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <input id="province" type="text" name="province" placeholder="จังหวัด" class="form-control bg-white border-md" required>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <input id="zipcode" type="text" name="zipcode" placeholder="รหัสไปรษณีย์" class="form-control bg-white border-md" required>
                        </div>



                        <div class="input-group col-lg-12    mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-list text-muted"></i>
                                </span>
                            </div>
                            <select id="object_name" name="object_name" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="0" disabled selected>วัตถุประสงค์</option>
                                <option value="1">ก่อสร้างห้องความดันลบฯ (ICU Covid Negative Pressure)</option>
                                <option value="2">วัสดุและครุภัณฑ์ทางการแพทย์ (สามารถระบุเพิ่มเติมได้)</option>
                            </select>
                        </div>
                        <!--  -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-sticky-note text-muted"></i>
                                </span>
                            </div>
                            <input id="cc" type="text" name="cc" placeholder="วัตถุประสงค์ อื่น ๆ ระบุ " class="form-control bg-white border-left-0 border-md" required>
                        </div>


                        <!--date s -->
                        <div class="input-group col-lg-6 mb-4" title="">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-calendar-o text-muted"></i>
                                </span>
                            </div>
                            <input id="startdate" type="date" name="startdate" placeholder="วันที่โอน" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- date e -->
                        <div class="input-group col-lg-6 mb-4" title="">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-calendar text-muted"></i>
                                </span>
                            </div>
                            <input id="enddate" type="time" name="enddate" placeholder="เวลาที่โอน" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                        <!--  -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-btc text-muted"></i>
                                </span>
                            </div>
                            <input id="amount" type="text" name="amount" title="" placeholder=" จำนวนเงินที่โอน " onkeyup="format(this)" onchange="format(this)" 31. onblur="if(this.value.indexOf('.')==-1)this.value=this.value+''" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">

                            </div>
                        </div>

                        <div class="input-group te col-lg-6 mb-4">
                            <input type="radio" name="transfer_bank" id="ktb" class="input-hidden" value="ktb" />
                            <label for="ktb"> <img src="images/logo-krungthai.png" alt="I'm ktb" title="โอนเงินผ่าน ธนาคารกรุงไทย" /></label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="transfer_bank" id="scb" class="input-hidden" value="scb" />
                            <label for="scb"> <img src="images/logo-scb.png" alt="I'm scb" title="โอนเงินผ่าน ธนาคารไทยพาณิชย์" /></label>
                        </div>
                        <div class="input-group te col-lg-6 mb-4">
                            <div class="file_uploader">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                                <input id="file_upload" name="file_upload" type="file" multiple="true" required>
                                <label for="file_upload" title="แนบไฟล์สลิปหลักฐานการโอนเงิน">แนบสลิปโอนเงิน</label>
                            </div>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                            <!-- <div class="ml-5 showslip" id="thumbnail"></div> -->
                            </div>
                        </div>
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                            <div class="showslip" id="thumbnail"></div>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0 ">
                            <button type="submit" name="submit" class="btn btn-primary btn-block py-2" value="submit">ส่งข้อมูล</button>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <!-- <span class="px-2 small text-muted font-weight-bold text-muted">OR</span> -->
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Help Information Center ? <a href="https://www.cpa.go.th" target="_blank" class="text-primary ml-2">Information</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    //  company_name id_card addr district amphoe province zipcode phone amount pay_id cc ment_id startdate enddate file_upload

    $target_dir = "uploads/";
    $newimgname = 'img-' . rand() . '-' . date("Ymdhis");
    $target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // check นามสกุลไฟล์
    $target_file = $target_dir . $newimgname . '.' . $imageFileType; // ปรับ path file และที่อยู่

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
        if ($check !== false) { //เช็คใช่ไฟล์ภาพหรือไม่
            // echo "File is an image - " . $check["mime"] . ".";
            // $uploadOk = 1;

            // Check file size
            if ($_FILES["file_upload"]["size"] > 6097152) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else { // ไม่เจอerror รูปภาพ ทำการอัพโหลดภาพและบันทึกข้อมูลลงฐานข้อมูล
                if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["file_upload"]["name"])) . " has been uploaded.";
                    echo $pt_name = $_POST['company_name'];
                    echo $cid = $_POST['id_card'];
                    echo $address_number_moo = $_POST['addr'];
                    echo $tmp_name = $_POST['district'];
                    echo $amp_name = $_POST['amphoe'];
                    echo $chw_name = $_POST['province'];
                    echo $zipcode = $_POST['zipcode'];
                    echo $phone   =  $_POST['phone'];
                    echo $amount  =  $_POST['amount'];
                    echo $transfer_monny = str_replace(",", "", $amount);

                    echo $object_name = $_POST['object_name'];
                    echo $object_orther = $_POST['cc'];
                    echo $transfer_bank = $_POST['transfer_bank'];
                    echo $transfer_date = $_POST['startdate'];
                    echo $transfer_time = $_POST['enddate'];
                    echo $img_name =  $newimgname . '.' . $imageFileType;
                    echo $type_check = 'N';
                    echo $ipupdate  = get_client_ip();
                    echo $insertdate = date('Y-m-d');

                    require_once('./config/db.php');
                    echo "<br>";
                    echo $sql = "INSERT INTO abhrcdb
            (  pt_name,cid,phone,object_name,object_orther,transfer_bank,transfer_date,transfer_time,
             transfer_monny ,img_name ,address_number_moo ,tmp_name,amp_name,chw_name ,zipcode ,
             type_check,flage,ipupdate  )
             VALUES ('$pt_name','$cid','$phone','$object_name','$object_orther','$transfer_bank','$transfer_date','$transfer_time','$transfer_monny',
             '$img_name','$address_number_moo','$tmp_name','$amp_name','$chw_name','$zipcode','$type_check','Default','$ipupdate') ";
                    echo "<br>";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
    ?>
                        <script>
                            swal({
                                icon: "success",
                                title: "บันทึกข้อมูลสำเร็จ",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                            }).then(function(result) {
                                window.location = "./";
                            })
                        </script>
    <?php

                    } else {
                        echo "something went wrong Can't insert data to data base !!!";
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    function get_client_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    ?>

    <script language="javascript">
        // เช็ค form
        function CheckNum() {
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.returnValue = false;
                swal("เฉพาะตัวเลขเท่านั้น!", "โปรดระบุ หมายเลขประชาชน เป็นตัวเลขเท่านั้น !");
            }
        }

        function CheckNumuser() {
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.returnValue = false;
                swal("เฉพาะตัวเลขเท่านั้น!", "โปรดกรอกข้อมูลหมายเลขโทรศัพท์ เป็นตัวเลขเท่านั้น");
            }
        }


        function format(input) {
            var num = input.value.replace(/\,/g, '');
            if (!isNaN(num)) {
                if (num.indexOf('.') > -1) {
                    num = num.split('.');
                    num[0] = num[0].toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1,').split('').reverse().join('').replace(/^[\,]/, '');
                    if (num[1].length > 2) {
                        //    alert('You may only enter two decimals!');
                        swal("เฉพาะตัวเลขเท่านั้น!", "โปรดกรอกข้อมูลจำนวนเงิน เป็นตัวเลขและทศนิยม2ตำแหน่งเท่านั้น");
                        num[1] = num[1].substring(0, num[1].length - 1);
                    }
                    input.value = num[0] + '.' + num[1];
                } else {
                    input.value = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1,').split('').reverse().join('').replace(/^[\,]/, '')
                };
            } else {
                swal("เฉพาะตัวเลขเท่านั้น!", "โปรดกรอกข้อมูลจำนวนเงิน เป็นตัวเลขและทศนิยม2ตำแหน่งเท่านั้น");
                //   alert('You may enter only numbers in this field!');
                input.value = input.value.substring(0, input.value.length - 1);
            }
        }
    </script>


    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <script type="text/javascript">
        $(function() {
            $("#upload").on("click", function(e) {
                $("#file_upload").show().click().hide();
                e.preventDefault();
            });
            $("#file_upload").on("change", function(e) {
                var files = this.files
                showThumbnail(files)
            });

            function showThumbnail(files) {
                $("#thumbnail").html("");
                for (var i = 0; i < files.length; i++) {
                    var file = files[i]
                    var imageType = /image.*/
                    if (!file.type.match(imageType)) {
                        //     console.log("Not an Image");
                        continue;
                    }

                    var image = document.createElement("img");
                    var thumbnail = document.getElementById("thumbnail");
                    image.file = file;
                    thumbnail.appendChild(image)

                    var reader = new FileReader()
                    reader.onload = (function(aImg) {
                        return function(e) {
                            aImg.src = e.target.result;
                        };
                    }(image))

                    var ret = reader.readAsDataURL(file);
                    var canvas = document.createElement("canvas");
                    ctx = canvas.getContext("2d");
                    image.onload = function() {
                        ctx.drawImage(image, 100, 100)
                    }
                } // end for loop

            } // end showThumbnail
        });
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>

    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="./js/jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
    <!-- / dependencies for zip mode -->

    <script type="text/javascript" src="./js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>

    <script type="text/javascript" src="./js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

    <script type="text/javascript">
        /******************\
         *     DEMO 1     *
        \******************/
        // demo 1: load database from json. if your server is support gzip. we recommended to use this rather than zip.
        // for more info check README.md

        $.Thailand({
            database: './js/jquery.Thailand.js/database/db.json',

            $district: $('#demo1 [name="district"]'),
            $amphoe: $('#demo1 [name="amphoe"]'),
            $province: $('#demo1 [name="province"]'),
            $zipcode: $('#demo1 [name="zipcode"]'),

            onDataFill: function(data) {
                console.info('Data Filled', data);
            },

            onLoad: function() {
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

        // watch on change

        $('#demo1 [name="district"]').change(function() {
            console.log('ตำบล', this.value);
        });
        $('#demo1 [name="amphoe"]').change(function() {
            console.log('อำเภอ', this.value);
        });
        $('#demo1 [name="province"]').change(function() {
            console.log('จังหวัด', this.value);
        });
        $('#demo1 [name="zipcode"]').change(function() {
            console.log('รหัสไปรษณีย์', this.value);
        });
    </script>
</body>

</html>