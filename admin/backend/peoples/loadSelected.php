<?php 

include('../connection.php');
session_start();
$id=$_SESSION["candidateID"]; //student id 
$record = array();
$result = mysqli_query($connect,"SELECT b.student_number,b.name,b.college_id FROM `tbl_peoples_choice` a LEFT JOIN tbl_students b  on a.student_id=b.id where a.candidate_id='$id'")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	//convert number to types
if($row['college_id']==2){

	$row['college_id']="CCS";
	}else if($row['college_id']==3){	
	$row['college_id']="COS";
	}else if($row['college_id']==4){
	$row['college_id']="CTM";
	}else if($row['college_id']==5){
	$row['college_id']="CTHM";
	}else if($row['college_id']==6){
	$row['college_id']="COAHS";
	}else if($row['college_id']==7){
	$row['college_id']="COE";
	}else if($row['college_id']==8){
	$row['college_id']="CAL";
	}else if($row['college_id']==9){
	$row['college_id']="HSU";
	}else if($row['college_id']==10){
	$row['college_id']="CCSCE";
	}else if($row['college_id']==11){
	$row['college_id']="CGPP";
	}else if($row['college_id']==12){
	$row['college_id']="CBFS";
	}else{
		$row['college_id']="Other College";
	}	

	$record[]=$row;
}
$data = array(
	"sEcho" => 1,
"iTotalRecords" => count($record),
"iTotalDisplayRecords" => count($record),
  "aaData"=>$record);

echo json_encode($data);


 ?>