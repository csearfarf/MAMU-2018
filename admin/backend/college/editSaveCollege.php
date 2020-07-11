<?php 
include('../connection.php');

if (isset($_POST['id']) && isset($_POST['collegeName']) && isset($_POST['abbr'])) {
$id=$_POST['id'];
$collegeName=$_POST['collegeName'];
$abbr=$_POST['abbr'];


$update="UPDATE `tbl_college` SET `college_name` = '$collegeName',`abbr` = '$abbr' WHERE id = $id";

$savequery=mysqli_query($connect,$update) or die("ERROR IN Updating");
if($savequery){
echo "1";// successfully inserted
}



}

?>