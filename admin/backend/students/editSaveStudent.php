<?php 
include('../connection.php');

if (isset($_POST['id']) && isset($_POST['estudentNumber']) && isset($_POST['ename']) && isset($_POST['ecollegeType'])) {
$id=$_POST['id'];
$estudentNumber=$_POST['estudentNumber'];
$ename=$_POST['ename'];
$ecollegeType=$_POST['ecollegeType'];


$update="UPDATE `tbl_students` SET `name` = '$ename', `student_number` = '$estudentNumber',`college_id` = '$ecollegeType' WHERE id = $id";

$savequery=mysqli_query($connect,$update) or die("ERROR IN CREATION");
if($savequery){
echo "1";// successfully inserted
}



}

?>