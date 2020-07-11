<?php 

include('../connection.php');

$record = array();
$result = mysqli_query($connect,"SELECT a.id as candidate_id,name,gender,candidate_number,image ,b.college_name,b.id,b.abbr FROM `tbl_candidates` a LEFT JOIN tbl_college b on a.college_id=b.id")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	//convert number to types
	 if($row['gender']==0){
	$row['gender']="Female";
	}else if($row['gender']==1){
	$row['gender']="Male";
	}
	$filepath='./backend/candidates/uploads/';
	$imageName=$row['image'];

	if($imageName==null || $imageName==""){
	$imageName='unknown.png';
	}

	$newpath=$filepath.$imageName;
	$row['image']='<img class="avatar avatar-sm rounded-circle" src="'.$newpath."?".time().'" id="candidateImahe'.$row['candidate_id'].'">';
	$row['btn'] ='
	<button id="btn"  class="btn btn-warning btn-sm" onclick="deleteAccount('.$row['candidate_id'].')">Delete</button>
	<button id="btn"  class="btn btn-info btn-sm" onclick="editAccount('.$row['candidate_id'].');">Edit</button>
	
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
