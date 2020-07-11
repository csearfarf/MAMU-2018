<?php 

include('../connection.php');

$record = array();
$result = mysqli_query($connect,"SELECT * FROM tbl_college")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	//convert number to types
	
	$row['btn'] ='
	<button id="btn"  class="btn btn-warning btn-sm" onclick="deleteSelectedCollege('.$row['id'].')">Delete</button>
	<button id="btn"  class="btn btn-info btn-sm" onclick="editSelectedCollege('.$row['id'].');">Edit</button>
	
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