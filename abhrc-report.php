<?php
include 'config/db.php';
date_default_timezone_set('Asia/Bangkok');

?>
<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <title>รายการลงทะเบียนขอรับใบเสร็จ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.dataTables.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/jszip.min.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <style>
    .fbody {
      font-family: 'Kanit', sans-serif;
    }

    .exportExcel {
      padding: 5px;
      border: 1px solid grey;
      margin: 5px;
      cursor: pointer;
    }

    .slip {
      width: 500px;
      /* height: 200px; */
      /* line-height: 200px; */
      vertical-align: middle;
      border-radius: 3px;
    }
  </style>
</head>

<body>
  <?
  $sql = " Select * ,CONCAT(LEFT(a.cid,4),'xXxXx',RIGHT(a.cid,4))  as cidx 
  FROM abhrcdb as a
  LEFT JOIN transfer_bank as b on a.transfer_bank = b.bank_name
  LEFT JOIN object_name as c on c.id = a.object_name
  WHERE 1 = 1
  ORDER BY a.id DESC ";
  $row = mysqli_query($conn, $sql);
  ?>
  <div class="w3-container fbody">
    <h2 class="fbody">รายการลงทะเบียนขอรับใบเสร็จ</h2>


    <!-- 

  <label for="fname">First Name</label>
  <input type="text" id="fname" name="fname" value="John">
  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lname" value="Doe">
</form> -->



    <button class="w3-bar-item w3-button w3-blue" onclick="document.getElementById('id01').style.display='block'">ExPort Excel</button>

    <table class="w3-table-all fbody table-hover" id="example" cellspacing="0" width="100%">
      <thead>
        <tr class="w3-red">
          <th>#</th>
          <th>คำนำหน้า</th>
          <th>ชื่อ-สกุล , ชื่อบริษัท</th>
          <th>เลขประชาชน</th>
          <th>เบอร์ติดต่อ</th>
          <th>วัตถุประสงค์</th>
          <th>วัตถุประสงค์อื่น ๆ ระบุเพิ่มเติม </th>
          <th>ธนาคารที่โอน</th>
          <th>วันที่ เวลา โอน</th>
          <th>จำนวนเงิน</th>
          <th>ที่อยู่</th>
          <th>วันเวลาทำรายการ</th>
          <th>slip</th>
          <th>สถานะ</th>
        </tr>
      </thead>
      <?php
      $rw = 0;
      while ($result = mysqli_fetch_array($row)) {
        $rw++;
      ?>
        <tr>
          <td><?php echo $rw; ?></td>
          <td><?php echo $result['gender']; ?></td>
          <td><?php echo $result['pt_name']; ?></td>
          <td><?php echo $result['cidx']; ?></td>
          <td><?php echo $result['phone']; ?></td>
          <td><?php echo $result['object_name']; ?></td>
          <td><?php echo $result['object_orther']; ?></td>
          <td><?php echo $result['transfer_bank']; ?></td>
          <td><?php echo $result['transfer_date'] . " " . $result['transfer_time']; ?></td>
          <td><?php echo $result['transfer_monny']; ?></td>
          <td><?php echo $result['address_number_moo'] . " " . $result['tmp_name'] . " " . $result['amp_name'] . " " . $result['chw_name'] . " " . $result['zipcode']; ?></td>
          <td><?php echo $result['dateupdate']; ?></td>
          <td>
            <button class="w3-bar-item w3-button" onclick="document.getElementById('<?php echo $result['id']; ?>').style.display='block'">
              <img src="images/receipt-icon02.png" alt="" width="45px" hight="25px">
            </button>
          </td>
          <td>
            <?php
            if ($result['type_check'] == 'N') {
              echo '<a href="check-status.php?id=' . $result["id"] . '"><button class="w3-bar-item w3-button"><img src="images/imageshh.png" alt=""  width="45px" hight="25px" ></button></a></td>';
            } else {
              echo '<button class="w3-bar-item w3-button " title="Status : ' . $result["type_check"] . ' | Update : ' . $result["type_check_updatedate"] . '"><img src="images/imagest.png" alt="" width="45px" hight="25px" ></button></a>';
            }
            ?>
        </tr>

        <div id="<?php echo $result['id']; ?>" class="w3-modal" onclick="this.style.display='none'">
          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom slip">
            <img src="uploads/<?php echo $result['img_name']; ?>" class="slip">
          </div>
        </div>
  </div>

<?
      }
?>
</table>
<script>
  $(document).ready(function() {
    var table = $('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [{
          extend: 'excel',
          text: 'Export excel',
          className: 'exportExcel',
          filename: 'Export excel',
          exportOptions: {
            modifier: {
              page: 'all'
            }
          }
        },
        {
          extend: 'copy',
          text: '<u>C</u>opie presse papier',
          className: 'exportExcel',
          key: {
            key: 'c',
            altKey: true
          }
        },
        {
          text: 'Alert Js',
          className: 'exportExcel',
          action: function(e, dt, node, config) {
            alert('Activated!');
            // console.log(table);

            // new $.fn.dataTable.Buttons(table, {
            //   buttons: [{
            //     text: 'gfdsgfsd',
            //     action: function(e, dt, node, config) {
            //       alert('ok!');
            //     }
            //   }]
            // });
          }
        }
      ]
    });

  });
</script>
</div>





<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <!-- <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top"> -->
      <h3 class="fbody">ส่งออกข้อมูลรายการทะเบียนผู้ขอรับในเสร็จ</h3>
      </div>

      <form class="w3-container" action="export.php" method="POST" >
        <div class="w3-section fbody">
          <label><b>วันที่เริ่ม</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="" name="sdate" required>
          <label><b>วันที่วิ้นสุด</b></label>
          <input class="w3-input w3-border" type="date" placeholder="" name="edate" required>
          <label><b>UserKeyCode</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Password Key" name="token" required>
          <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Download Excel File</button>
          <!-- <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me -->
        </div>
      </form>

      <!-- <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">ยกเลิก</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div> -->

    </div>
  </div>
</div>

</body>

</html>