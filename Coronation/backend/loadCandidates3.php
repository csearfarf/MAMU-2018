<?php 
include '../../appCode/dbConnection.php';
$record = array();
session_start();
$judgeID=$_SESSION['id'];
if (isset($_POST['id'])) {

$id=$_POST['id'];


$check="SELECT * FROM `tbl_votescoro` a left join tbl_candidates b on a.candidate_id=b.id where a.judge_id=$judgeID and b.candidate_number=$id and a.category_id=3";
$checkQuery=mysqli_query($connect,$check)or die("ERROR IN SELECTION1");


if($rowCount=mysqli_num_rows($checkQuery)>0){
echo "1";//already voted on this 

}else{

$result = mysqli_query($connect,"SELECT a.id as candidate_id,name,gender,candidate_number,college_id,image,b.id ,b.abbr FROM `tbl_candidates` a LEFT JOIN tbl_college b on a.college_id=b.id where a.candidate_number=$id  order by gender desc")or die("ERROR IN SELECTION");
$url="../admin/backend/candidates/uploads/";
while($row = mysqli_fetch_assoc($result)) {

	$row['image']=$url.$row['image'];

	$record[]=$row;



}//while
echo json_encode($record);


}// else





}


 ?>