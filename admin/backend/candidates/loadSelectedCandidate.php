<?php 
include('../connection.php');
$record = array();
if (isset($_POST['id'])) {
$id=$_POST['id'];
$result = mysqli_query($connect,"SELECT a.id as candidate_id,name,gender,candidate_number, b.college_name,b.id ,b.abbr FROM `tbl_candidates` a LEFT JOIN tbl_college b on a.college_id=b.id where a.id=$id")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {

	$record[]=$row;
}

echo json_encode($record);


}



 ?>