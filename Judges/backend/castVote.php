<?php 
include '../../appCode/dbConnection.php';
session_start();

if (isset($_POST['idmale']) && isset($_POST['computeTotalScoreMale']) && isset($_POST['idfemale']) && isset($_POST['computeTotalScoreFemale']) && isset($_POST['aveMaletalent']) && isset($_POST['aveMalePerformance']) && isset($_POST['aveFemaletalent']) && isset($_POST['aveFemalePerformance'])  ) {

 $judgeID=$_SESSION['id'];// judge id 
 $maleID=$_POST['idmale'];
 $femaleID=$_POST['idfemale'];

 $computeMale=number_format($_POST['computeTotalScoreMale'],2); // total
 $computeFemale=number_format($_POST['computeTotalScoreFemale'],2); //total

 $maleTalent=$_POST['aveMaletalent']; 
 $malePerformance=$_POST['aveMalePerformance']; 

 $femaleTalent=$_POST['aveFemaletalent']; 
 $femalePerformance=$_POST['aveFemalePerformance']; 


//male
$query1="INSERT INTO `tbl_votes` ( `candidate_id`, `judge_id`, `totalScore`,`talentScore`,`performanceScore`) VALUES ('.$maleID.', '.$judgeID.', $computeMale, '.$maleTalent.', '.$malePerformance.');";
//female
$query2="INSERT INTO `tbl_votes` (  `candidate_id`, `judge_id`, `totalScore`,`talentScore`,`performanceScore`) VALUES ('.$femaleID.', '.$judgeID.', $computeFemale, '.$femaleTalent.', '.$femalePerformance.');";

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