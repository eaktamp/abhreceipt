<?php session_start();
        $postk   = $_POST['token'];
        $token  = MD5($postk);
        $rand  = rand();
        $todate = date('Ymd_His');
        $sdate  = $_POST['sdate'];
        $edate  = $_POST['edate'];
    date_default_timezone_set('Asia/Bangkok');
        if($token!='7b8025f2e8713caf76bbeb26808a27e3'){
        Header("Location: abhrc-report.php?errorkeycode!".$postk."!".$rand."&".$todate."(*_*)");  
     }  
        include 'config/db.php';
    header("Content-Disposition: attachment; filename=FileExportSLip_".$todate.".xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>------------------------</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style type="text/css">
            .myTable {
                width: 100%;
                background-color: #eee;
                border-collapse: collapse;
                font-size: 14.5px;
            }

            .myTable th {
                background-color: #000;
                color: white;
                /* width: 50%; */
                text-align: center;
            }


            th {
                border: 1px solid white;
            }

            .myTable td,
            .myTable th {
                padding: 5px;
                border: 1px solid #000;
            }
        </style>
<body>
    <?php

    $sql = " Select * 
                FROM abhrcdb as a
                LEFT JOIN transfer_bank as b on a.transfer_bank = b.bank_name
                LEFT JOIN object_name as c on c.id = a.object_name
                WHERE 1 = 1
                AND a.transfer_date Between '$sdate' AND '$edate' ";

    if ($row = mysqli_query($conn, $sql)) {

    ?>

        <table class="myTable">
            <tr style="border: 1px solid #000; color:aquamarine;  background-color: #000; ">
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
            </tr>
            <?php
            $rw = 0;
            while ($result = mysqli_fetch_array($row)) {
                $rw++;
            ?>
                <tr style="border: 1px solid #000;">
                    <td><?php echo $rw; ?></td>
                    <td><?php echo $result['gender']; ?></td>
                    <td><?php echo $result['pt_name']; ?></td>
                    <td><?php echo " ".$result['cid']; ?></td>
                    <td><?php echo $result['phone']; ?></td>
                    <td><?php echo $result['object_name']; ?></td>
                    <td><?php echo $result['object_orther']; ?></td>
                    <td><?php echo $result['transfer_bank']; ?></td>
                    <td><?php echo $result['transfer_date'] . " " . $result['transfer_time']; ?></td>
                    <td><?php echo ROUND($result['transfer_monny'],2); ?></td>
                    <td><?php echo " ".$result['address_number_moo'] . " " . $result['tmp_name'] . " " . $result['amp_name'] . " " . $result['chw_name'] . " " . $result['zipcode']; ?></td>
                    <td><?php echo $result['dateupdate']; ?></td>
            <?php
            }
        }
            ?>
                </tr>

        </table>

</body>

</html>