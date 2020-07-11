<?php 
include('../connection.php');

if (isset($_POST['id']) && isset($_POST['ecandidateNumber']) && isset($_POST['ename']) && isset($_POST['egenderType']) && isset($_POST['ecollegeType']) && isset($_POST['candidateImage'])) {
$id=$_POST['id'];
$ecandidateNumber=$_POST['ecandidateNumber'];
$ename=$_POST['ename'];
$egenderType=$_POST['egenderType'];
$ecollegeType=$_POST['ecollegeType'];
$candidateImage=$_POST['candidateImage'];


$update="UPDATE `tbl_candidates` SET `image`= '$candidateImage' ,`name` = '$ename',`gender` = '$egenderType', `candidate_number` = '$ecandidateNumber',`college_id` = '$ecollegeType' WHERE id = $id";

$savequery=mysqli_query($connect,$update) or die("ERROR IN CREATION");
if($savequery){
echo "1";// successfully inserted
}



}

?>