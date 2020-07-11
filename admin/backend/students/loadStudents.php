<?php 

include('../connection.php');

$record = array();
$result = mysqli_query($connect,"SELECT a.id as student_id,student_number,college_id,name,registered, b.college_name,b.id,b.abbr FROM `tbl_students` a LEFT JOIN tbl_college b on a.college_id=b.id")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	//convert number to types
	 if($row['registered']==0){
	$row['registered']="No";
	}else if($row['registered']==1){
	$row['registered']="Yes";
	}


	$row['btn'] ='
	<button id="btn"  class="btn btn-warning btn-sm" onclick="deleteStudent('.$row['student_id'].')">Delete</button>
	<button id="btn"  class="btn btn-info btn-sm" onclick="editStudent('.$row['student_id'].');">Edit</button>
	
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
