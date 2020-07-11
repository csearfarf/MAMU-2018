<?php 
include('../connection.php');

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])) {
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];

$selection="SELECT * FROM tbl_accounts where username='$username'";
$selectquery=mysqli_query($connect,$selection) or die("ERROR IN selection");
if(mysqli_num_rows($selectquery)>0){
	echo "0";// already username exist
}else{

$insert="INSERT INTO `tbl_accounts` ( `type`, `name`, `username`, `password`) VALUES ('$type', '$name', '$username', '$password');";
$savequery=mysqli_query($connect,$insert) or die("ERROR IN CREATION");
if($savequery){
echo "1";// successfully inserted
}
}


}

?>