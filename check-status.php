<?php
    header( "location: abhrc-report.php" );
    header('Content-Type: application/json');
    include 'config/db.php';
    date_default_timezone_set('Asia/Bangkok');
    
    $id           =  $_GET['id'];
    $type_check   = "OK";
    $dateup     = DATE('Y-m-d H:i:s');
	$sql = " UPDATE abhrcdb SET type_check = '$type_check' ,type_check_updatedate = '$dateup' WHERE id = '$id' ";
if (mysqli_query($conn, $sql)) {
       // echo json_encode(array("statusCode"=>200));
  }else {
      //  echo json_encode(array("statusCode"=>201));
	}
    mysqli_close($conn);
    ?>