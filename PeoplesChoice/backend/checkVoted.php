<?php 


include "../../appCode/dbConnection.php";
if(isset($_POST["id"])){
$id=$_POST["id"];

$check="SELECT * FROM `tbl_students` where student_number='".$id."'";
$query=mysqli_query($connect,$check) or die ("ERROR IN SELECTION of STUDENT NUMBER 1");
if(mysqli_num_rows($query)>0){

	echo 2;	


}else{
	echo 1;
}



}




 ?>