<?php 
include('../connection.php');

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])) {
$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];


$update="UPDATE `tbl_accounts` SET `name` = '$name',`username` = '$username', `password` = '$password',`type` = '$type' WHERE id = $id";

$savequery=mysqli_query($connect,$update) or die("ERROR IN CREATION");
if($savequery){
echo "1";// successfully inserted
}



}

?>