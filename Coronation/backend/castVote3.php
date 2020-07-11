<?php 
include '../../appCode/dbConnection.php';
session_start();
if (isset($_POST['idmale']) && isset($_POST['computeTotalScoreMale']) &&isset($_POST['idfemale']) && isset($_POST['computeTotalScoreFemale']) && isset($_POST['malepoint1']) &&isset($_POST['malepoint2']) && isset($_POST['femalepoint1']) &&isset($_POST['femalepoint2'])
) {

 $judgeID=$_SESSION['id'];// judge id 
 $maleID=$_POST['idmale'];
 $femaleID=$_POST['idfemale'];

 $computeMale=$_POST['computeTotalScoreMale']; // total
 $computeFemale=$_POST['computeTotalScoreFemale']; //total

 $male1=$_POST['malepoint1']; 
 $male2=$_POST['malepoint2']; 

 $female1=$_POST['femalepoint1']; 
 $female2=$_POST['femalepoint2']; 


//male
$query1="INSERT INTO `tbl_votescoro` ( `category_id`, `candidate_id`, `judge_id`, `totalScore`, `score1`, `score2`) VALUES ( '3', '$maleID', '$judgeID', '$computeMale', '$male1', '$male2');";
//female
$query2="INSERT INTO `tbl_votescoro` ( `category_id`, `candidate_id`, `judge_id`, `totalScore`, `score1`, `score2`) VALUES ( '3', '$femaleID', '$judgeID', '$computeFemale', '$female1', '$female2');";

$suc=mysqli_query($connect,$query1)or die("ERROR IN SELECTION");
$suc1=mysqli_query($connect,$query2)or die("ERROR IN SELECTION");

if($suc){
	if($suc1){
		echo "1";
	}
}else{
	echo "0";
}



}


 ?>