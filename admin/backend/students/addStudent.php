<?php 
include('../connection.php');

if (isset($_POST['studentNumber']) && isset($_POST['name']) && isset($_POST['collegeType'])) {

$studentNumber=$_POST['studentNumber'];
$name=$_POST['name'];
$collegeType=$_POST['collegeType'];

$selection="SELECT * FROM tbl_students where name='$name'";
$selectquery=mysqli_query($connect,$selection) or die("ERROR IN selection");
if(mysqli_num_rows($selectquery)>0){
	echo "0";// already username exist
}else{

$insert="INSERT INTO `tbl_students` ( `name`, `student_number`, `college_id`) VALUES ('$name', '$studentNumber', '$collegeType');";
$savequery=mysqli_query($connect,$insert) or die("ERROR IN CREATION");
if($savequery){
echo "1";// successfully inserted
}
}


}

?>