<?php 

include('../connection.php');
session_start();
$id=$_SESSION["candidateID"]; //student id 
$record = array();
$result = mysqli_query($connect,"select b.name, a.totalScore,a.talentScore,a.performanceScore from tbl_votes a left join tbl_accounts b on a.judge_id=b.id where a.candidate_id='$id'")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	//convert number to types
	

	$record[]=$row;
}
$data = array(
	"sEcho" => 1,
"iTotalRecords" => count($record),
"iTotalDisplayRecords" => count($record),
  "aaData"=>$record);

echo json_encode($data);


 ?>