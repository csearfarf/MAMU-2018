<?php 

include('../connection.php');

$record = array();
$result = mysqli_query($connect,"SELECT * FROM tbl_accounts")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	//convert number to types
	if($row['type']==1){

	$row['type']="Judge";
	}else if($row['type']==0){
	$row['type']="Admin";
	}

	$row['btn'] ='
	<button id="btn"  class="btn btn-warning btn-sm" onclick="deleteAccount('.$row['id'].')">Delete</button>
	<button id="btn"  class="btn btn-info btn-sm" onclick="editAccount('.$row['id'].');">Edit</button>
	
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