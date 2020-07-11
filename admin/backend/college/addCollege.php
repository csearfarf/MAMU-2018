<?php 
include('../connection.php');

if (isset($_POST['collegename']) && isset($_POST['abbr'])) {
$collegename=$_POST['collegename'];
$abbr=$_POST['abbr'];

$selection="SELECT * FROM tbl_college where college_name='$collegename'";
$selectquery=mysqli_query($connect,$selection) or die("ERROR IN selection");
if(mysqli_num_rows($selectquery)>0){
	echo "0";// already username exist
}else{

$insert="INSERT INTO `tbl_college` ( `college_name`, `abbr`) VALUES ('$collegename', '$abbr');";
$savequery=mysqli_query($connect,$insert) or die("ERROR IN CREATION");
if($savequery){
echo "1";// successfully inserted
}
}


}

?>