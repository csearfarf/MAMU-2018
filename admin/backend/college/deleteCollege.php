<?php 
include('../connection.php');

if (isset($_POST['id'])) {
$id=$_POST['id'];
$delete="DELETE FROM `tbl_college` WHERE `tbl_college`.`id` = $id;";
$deletequery=mysqli_query($connect,$delete) or die("ERROR IN CREATION");
if($deletequery){
echo "1";// successfully deleted
}
}

?>