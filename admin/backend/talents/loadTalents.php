<?php 

include('../connection.php');

$record = array();
$result = mysqli_query($connect,"select a.candidate_number ,a.id,a.name,a.gender ,sum(totalScore) total from tbl_candidates a left join tbl_votes b  on a.id=b.candidate_id group by a.id")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	//convert number to types
	if($row['total']==null || $row['total']==""){
		$row['total']="No Score ";
	}
	if($row['gender']==1){
		$row['gender']="Male";
	}else{

		$row['gender']="Female";
	}
	$row['btn'] ='
	<button id="btn"  class="btn btn-warning btn-sm" onclick="selectCandidate('.$row['id'].')">View Details</button>
	
	';
	$record[]=$row;
}
$data = array(
	"sEcho" => 1,
"iTotalRecords" => count($record),
"iTotalDisplayRecords" => count($record),
  "aaData"=>$record);

echo json_encode($data);


 ?>