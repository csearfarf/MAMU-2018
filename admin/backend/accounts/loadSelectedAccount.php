<?php 
include('../connection.php');
$record = array();
if (isset($_POST['id'])) {
$id=$_POST['id'];
$result = mysqli_query($connect,"SELECT * FROM `tbl_accounts` where id=$id")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	$record[]=$row;
}

echo json_encode($record);


}



 ?>