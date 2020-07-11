<?php 
include('../connection.php');

if (isset($_POST['candidateNumber']) && isset($_POST['name']) && isset($_POST['genderType']) && isset($_POST['collegeType'])&& isset($_POST['candidateImage']) ) {
$candidateImage=$_POST['candidateImage'];
$candidateNumber=$_POST['candidateNumber'];
$name=$_POST['name'];
$collegeType=$_POST['collegeType'];
$genderType=$_POST['genderType'];

$selection="SELECT * FROM tbl_candidates where name='$name'";
$selectquery=mysqli_query($connect,$selection) or die("ERROR IN selection");
if(mysqli_num_rows($selectquery)>0){
	echo "0";// already username exist
}else{

$insert="INSERT INTO `tbl_candidates` ( `name`, `gender`, `candidate_number`, `college_id`,`image`) VALUES ('$name', '$genderType', '$candidateNumber', '$collegeType','$candidateImage');";
$savequery=mysqli_query($connect,$insert) or die("ERROR IN CREATION");
if($savequery){
echo "1";// successfully inserted
}
}


}

?>